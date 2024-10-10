<?php include('templates/header.php'); ?>

<div class="container mt-5">
    <h2 class="text-center">Admin Dashboard</h2>
    
    <!-- Order Overview Section -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-pink text-white">
                    <h4>Order Overview</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Client</th>
                                <th>Status</th>
                                <th>Driver</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // PHP code to fetch orders from the database
                            // Replace this with actual database query and loop
                            $orders = [
                                ['id' => 1, 'client' => 'John Doe', 'status' => 'Delivered', 'driver' => 'Driver A'],
                                ['id' => 2, 'client' => 'Jane Smith', 'status' => 'Pending', 'driver' => 'Driver B'],
                                ['id' => 3, 'client' => 'Mike Johnson', 'status' => 'Picked up', 'driver' => 'Driver C'],
                            ];
                            foreach ($orders as $order) {
                                echo "<tr>
                                        <td>{$order['id']}</td>
                                        <td>{$order['client']}</td>
                                        <td>{$order['status']}</td>
                                        <td>{$order['driver']}</td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Driver Assignment Section -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-pink text-white">
                    <h4>Assign Driver</h4>
                </div>
                <div class="card-body">
                    <form action="assign_driver.php" method="POST">
                        <div class="form-group">
                            <label for="order_id">Order ID</label>
                            <input type="text" name="order_id" class="form-control" placeholder="Enter Order ID" required>
                        </div>
                        <div class="form-group">
                            <label for="driver">Assign Driver</label>
                            <select name="driver" class="form-control" required>
                                <option value="Driver A">Driver A</option>
                                <option value="Driver B">Driver B</option>
                                <option value="Driver C">Driver C</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-block btn-pink mt-3">Assign Driver</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delivery Tracking Section -->
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-pink text-white">
                    <h4>Track Delivery Status</h4>
                </div>
                <div class="card-body">
                    <form action="track_delivery.php" method="POST">
                        <div class="form-group">
                            <label for="order_id">Order ID</label>
                            <input type="text" name="order_id" class="form-control" placeholder="Enter Order ID" required>
                        </div>
                        <button type="submit" class="btn btn-block btn-pink mt-3">Track Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include('templates/footer.php'); ?>
