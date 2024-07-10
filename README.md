## Blood Bank Management System
This Blood Bank Management System is a web-based application developed using PHP and MySQL, hosted on a local server using XAMPP. The system allows users to manage blood donations, donors, and recipients efficiently.

## Features
- User authentication (Admin, Donor, Recipient)
- Manage blood donors and recipients
- Record blood donations and transfusions
- Search for available blood types
- View donation history.

## Installation
1. Clone the Repository:
git clone https://github.com/chandana18d/Blood-Management-System.git
2. Start XAMPP:
Open XAMPP Control Panel and start Apache and MySQL.
3. Create Database:
Open phpMyAdmin by navigating to http://localhost/phpmyadmin in your web browser.
4. Create a new database named blood_bank.
Import the blood_bank.sql file located in the database directory of the cloned repository.
5. Configure Database Connection:
Open the project directory and locate the config.php file.
6. Update the database connection settings with your MySQL credentials:
```
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'blood_bank';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```
7. Run the Application:
Place the project directory in the htdocs folder of your XAMPP installation.
Open your web browser and navigate to http://localhost/blood-bank-management-system.

## Usage
1. Admin Login:
- Navigate to the admin login page.
- Use the following credentials to log in as an admin:
- Username: admin
- Password: password
2. Manage Donors:
- Add, edit, and delete donor information.
- Record new blood donations.
3. Manage Recipients:
- Add, edit, and delete recipient information.
- Record blood transfusions.
4. Search Blood Types:
Search for available blood types and donors.

## Database
The blood_bank database contains the following tables:
- admin: Stores admin login information.
- donors: Stores donor information.
- recipients: Stores recipient information.
- donations: Stores blood donation records.
- transfusions: Stores blood transfusion records.
## Technologies Used
- PHP
- MySQL
- HTML
- CSS
- JavaScript
- XAMPP
