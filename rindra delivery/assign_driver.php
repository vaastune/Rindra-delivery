<?php
// Example script for assigning a driver to an order

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $orderID = $_POST['order_id'];
    $driver = $_POST['driver'];

    // Example PDO database update query to assign driver
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=rindra_delivery", "root", "");
        $stmt = $pdo->prepare("UPDATE orders SET driver = :driver WHERE id = :order_id");
        $stmt->execute(['driver' => $driver, 'order_id' => $orderID]);

        echo "Driver assigned successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
