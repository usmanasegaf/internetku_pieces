const express = require('express');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');
const db = require('./config/db');
const cors = require('cors');

const app = express();
const port = 3000;

app.use(cors({ origin: 'http://localhost:8000' }));
app.use(express.json());

// API for user login
app.post('/api/login', (req, res) => {
    const { username, password } = req.body;

    if (!username || !password) {
        return res.status(400).json({ message: 'Username and password are required.' });
    }

    const query = 'SELECT * FROM users WHERE username = ?';
    db.query(query, [username], (err, results) => {
        if (err) return res.status(500).json({ message: 'Database error', error: err });

        if (results.length === 0) {
            return res.status(401).json({ message: 'Invalid credentials.' });
        }

        const user = results[0];

        bcrypt.compare(password, user.password, (err, isMatch) => {
            if (err) return res.status(500).json({ message: 'Error comparing passwords' });

            if (isMatch) {
                const token = jwt.sign(
                    { userId: user.user_id, username: user.username },
                    'your_secret_key',
                    { expiresIn: '1h' }
                );
                return res.json({ message: 'Login successful', token });
            } else {
                return res.status(401).json({ message: 'Invalid credentials.' });
            }
        });
    });
});

// API untuk mengambil semua data paket berlangganan
app.get('/api/packages', (req, res) => {
    const query = 'SELECT * FROM subscription_packages';
    
    db.query(query, (err, results) => {
        if (err) return res.status(500).json({ message: 'Database error', error: err });
        return res.json(results);
    });
});

// API untuk mengambil detail paket berdasarkan ID
app.get('/api/packages/:id', (req, res) => {
    const { id } = req.params;
    const query = 'SELECT * FROM subscription_packages WHERE package_id = ?';

    db.query(query, [id], (err, results) => {
        if (err) return res.status(500).json({ message: 'Database error', error: err });

        if (results.length === 0) {
            return res.status(404).json({ message: 'Package not found' });
        }

        return res.json(results[0]);
    });
});

// API untuk mendaftarkan user berserta paket yang di pilih
app.post('/api/register', async (req, res) => {
    const { full_name, email, phone, address, package_id } = req.body;
  
    try {
      const checkUserQuery = 'SELECT * FROM users WHERE email = ?';
      db.query(checkUserQuery, [email], async (err, result) => {
        if (err) throw err;
  
        let userId;
        let passwordInfo = null; 
        let usernameInfo = null;  
  
        if (result.length > 0) {
          userId = result[0].user_id;
        } else {
          const defaultPassword = 'User@1234';
          const hashedPassword = await bcrypt.hash(defaultPassword, 10);
  
          // Generate default username
          let defaultUsername = full_name.split(' ')[0].toLowerCase();
  
          const insertUserQuery = 'INSERT INTO users (email, phone_number, password, username) VALUES (?, ?, ?, ?)';
          db.query(insertUserQuery, [email, phone, hashedPassword, defaultUsername], (err, userResult) => {
            if (err) throw err;
            userId = userResult.insertId;
            passwordInfo = defaultPassword;
            usernameInfo = defaultUsername;
            continueRegistration();
          });
  
          return; 
        }
  
        continueRegistration();
  
        function continueRegistration() {
          const insertRegistrationQuery = 'INSERT INTO registrations (user_id, address, package_id) VALUES (?, ?, ?)';
          db.query(insertRegistrationQuery, [userId, address, package_id], (err, regResult) => {
            if (err) throw err;
  
            const responseMessage = {
              message: 'Pendaftaran berhasil!',
              ...(passwordInfo && { defaultPassword: passwordInfo }),
              ...(usernameInfo && { username: usernameInfo })
            };
  
            res.status(201).json(responseMessage);
          });
        }
      });
    } catch (error) {
      console.error(error);
      res.status(500).json({ message: 'Terjadi kesalahan saat mendaftarkan pengguna.' });
    }
});
  


app.listen(port, () => {
    console.log(`Server running on http://localhost:${port}`);
});
