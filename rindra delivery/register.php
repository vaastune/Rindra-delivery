<?php
require 'db.connection.php';  
require 'user.php';          


$dbConnection = new DBConnection();
$db = $dbConnection->getConnection();

$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    if ($user->registerUser($username, $password, $role)) {
        echo "Registration successful!";
    } else {
        echo "Registration failed!";
    }
}
?>
<form action="register.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    
    <label for="role">Role:</label>
    <select id="role" name="role">
        <option value="client">Client</option>
        <option value="driver">Driver</option>
        <option value="admin">Admin</option>
    </select>
    
    <input type="submit" value="Register">
</form>


