<?php
// Create database connection using config file
include_once("../config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <a href="add.php">Add New penjual</a><br /><br />

    <table width='80%' border=1>

        <tr>
            <th>Nama</th>
            <th>alamat</th>
            <th>telepon</th>
            <th>Update</th>
            <th>id</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['name'] . "</td>";
            echo "<td>" . $user_data['alamat'] . "</td>";
            echo "<td>" . $user_data['telepon'] . "</td>";
            echo "<td>" . $user_data['id'] . "</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>