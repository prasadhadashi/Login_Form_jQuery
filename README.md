# Login_Form_jQuery
This is a simple JQuery Project that store a login data in php xampp database

Create a table in your MySQL database to store the user data. Use the following SQL query:
CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
