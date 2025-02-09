const mysql = require('mysql2');

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'P@ssw0rd',
    database: 'internetku'
});

db.connect((err) => {
    if (err) throw err;
    console.log('Connected to MySQL database.');
});

module.exports = db;