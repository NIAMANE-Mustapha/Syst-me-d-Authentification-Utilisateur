1. Install Required Software:
Web Server: Install XAMPP, WAMP, or any other web server package that includes Apache, PHP, and MySQL.
Database Server: Ensure MySQL or MariaDB is installed.

3. Set Up the Project Files
Copy the Project Files:

Copy all project files (PHP files, HTML files, CSS files, JavaScript files, etc.) to the web server's root directory (e.g., htdocs in XAMPP or www in WAMP).
Update Database Credentials:

The provided PHP script contains hardcoded database credentials. Your  should change $username and $password to match his MySQL database credentials. If his MySQL setup uses the default root user without a password, he can update the script accordingly:
php
Copy code
$server_name = "localhost";
$username = "root";  // or the username he uses
$password = "";      // or the password he uses
$dbname = "ahlame";
Create the Database and Table:

Your  needs to create the ahlame database and the stagiaire table.  the SQL script to create the database and table:
sql
Copy code:

CREATE DATABASE ahlame;

USE ahlame;

CREATE TABLE stagiaire (
    num INT NOT NULL,
    nom_stagiaire VARCHAR(50) NOT NULL,
    prenom_stagiaire VARCHAR(50) NOT NULL,
    email_stagiaire VARCHAR(100) NOT NULL,
    PRIMARY KEY (num)
);

you can run this script using a tool like phpMyAdmin (included in XAMPP/WAMP) or the MySQL command line.

3. Run the Project
Start the Web Server:

Ensure the web server and MySQL server are running (e.g., via XAMPP/WAMP control panel).
Access the Project:

Open a web browser and navigate to http://localhost/your_project_directory to access the project.
