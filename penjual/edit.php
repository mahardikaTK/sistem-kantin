<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $name = $_POST['name'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $penjual = $_POST['penjual'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',jenis='$Jenis',harga='$harga',penjual='$penjual' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $name = $_POST['name'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $id = $_POST['id'];
}
?>
<html>

<head>
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name; ?>></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="telepon" value=<?php echo $telepon; ?>></td>
            </tr>
            <tr>
                <td>id</td>
                <td><input type="text" name="id" value=<?php echo $id; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>