const mysql = require('mysql2');

const db = mysql.createConnection({
    host: 'localhost',
    port: 6036,
    user: 'root',
    password: 'bismillah',
    database: 'internetku'
});

db.connect((err) => {
    if (err) throw err;
    console.log('Connected to MySQL database.');
});

module.exports = db;