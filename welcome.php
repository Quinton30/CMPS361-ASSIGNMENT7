<?php
session_start();

// Redirect to login page if not authenticated
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>You have successfully logged in.</p>

        <div class="button-group">
            <a href="products.php" class="btn">View Products</a>
            <a href="newpage.php" class="btn">Go to New Page</a>
            <a href="logout.php" class="btn logout">Logout</a>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

