<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $orderID = $_POST['order_id'];

    
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=rindra_delivery", "root", "");
        $stmt = $pdo->prepare("SELECT * FROM orders WHERE id = :order_id");
        $stmt->execute(['order_id' => $orderID]);
        $order = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($order) {
            echo "Order #{$orderID} Status: {$order['status']}";
        } else {
            echo "Order not found!";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
