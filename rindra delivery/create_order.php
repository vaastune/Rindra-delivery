<?php
// Include database connection file
include('db_connection.php');

// Handle form submission to create a new order
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $clientName = $_POST['client_name'];
    $deliveryAddress = $_POST['delivery_address'];
    $status = $_POST['status'];

    // Insert the new order into the orders table
    $query = "INSERT INTO orders (client, delivery_address, status) VALUES (:client, :delivery_address, :status)";
    $stmt = $pdo->prepare($query);
    
    $stmt->execute([
        ':client' => $clientName,
        ':delivery_address' => $deliveryAddress,
        ':status' => $status
    ]);

    echo "Order created successfully!";
}

?>

<?php include('templates/header.php'); ?>

<div class="container mt-5">
    <h2>Create New Order</h2>
    
    <!-- Create Order Form -->
    <form action="create_order.php" method="POST">
        <div class="form-group mt-3">
            <label for="client_name">Client Name</label>
            <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Enter client's name" required>
        </div>

        <div class="form-group mt-3">
            <label for="delivery_address">Delivery Address</label>
            <input type="text" name="delivery_address" id="delivery_address" class="form-control" placeholder="Enter delivery address" required>
        </div>

        <div class="form-group mt-3">
            <label for="status">Order Status</label>
            <select name="status" id="status" class="form-control">
                <option value="Pending">Pending</option>
                <option value="Picked up">Picked up</option>
                <option value="Delivered">Delivered</option>
            </select>
        </div>

        <button type="submit" class="btn btn-pink mt-3">Create Order</button>
    </form>
</div>

<?php include('templates/footer.php'); ?>
