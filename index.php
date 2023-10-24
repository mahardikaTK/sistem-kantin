<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <h3>Menu</h3>
    <a href="penjual/index.php">penjual</a><br>
    <a href="menu/index.php">menu makanan/minuman</a>
</body>

</html>