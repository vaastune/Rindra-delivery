<?php
class Admin {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Function to create an order
    public function createOrder($clientName, $deliveryAddress, $status) {
        $query = "INSERT INTO orders (client, delivery_address, status) VALUES (:client, :delivery_address, :status)";
        $stmt = $this->pdo->prepare($query);

        // Bind parameters
        $stmt->execute([
            ':client' => $clientName,
            ':delivery_address' => $deliveryAddress,
            ':status' => $status
        ]);

        // Return confirmation
        return "Order created successfully!";
    }
}

?>
