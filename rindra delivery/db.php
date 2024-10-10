<?php

$host = '127.0.0.1';
$db   = 'rindra_delivery_db';
$user = 'root'; 
$pass = '';     
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// db.php
$host = 'localhost';  // your database host
$dbname = 'your_database_name'; // replace with your database name
$username = 'your_db_username';  // your MySQL username
$password = 'your_db_password';  // your MySQL password

try {
    // Connect to the database with PDO
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
