<?php include('templates/header.php'); ?>
<div class="container">
    <form action="login.php" method="POST" class="mt-5">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'db.php';
    include 'User.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User(null, $email, $password, null);
    if ($user->login($pdo, $email, $password)) {
        if ($_SESSION['role'] === 'admin') {
            header("Location: dashboard.php");
        } else {
            header("Location: driver_dashboard.php");
        }
    } else {
        echo "Invalid credentials!";
    }
}
?>
<?php include('templates/footer.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rindra Delivery</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Link to custom CSS -->

    <script src="assets/js/main.js"></script>


</head>
