<?php
// Create database connection using config file
include_once("../config.php");

// Fetch all menu data from database
$result = mysqli_query($mysqli, "SELECT m.id, m.nama, m.jenis, m.harga, p.nama AS nama_penjual FROM menu 
                    inner join penjual p on p.id=m.id_penjual ");
?>

<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <a href="add.php">Add New User</a><br />
    <a href="../index.php">kembali ke halaman utama</a><br /><br />

    <table width='80%' border=1>

        <tr>
            <th>Nama</th>
            <th>Jenis</th>
            <th>harga</th>
            <th>Penjual</th>
            <th>Update</th>
            <th>stok</th>

        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['name'] . "</td>";
            echo "<td>" . $user_data['jenis'] . "</td>";
            echo "<td>" . $user_data['harga'] . "</td>";
            echo "<td>" . $user_data['penjual'] . "</td>";
            echo "<td>" . $user_data['stok'] . "</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>