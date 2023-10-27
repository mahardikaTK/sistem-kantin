<?php
// include database connection file
include_once("../config.php");
$users = mysqli_query($mysqli, "select name, id from users");
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $name = $_POST['name'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $penjual = $_POST['penjual'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE menu SET name='$name',harga='$harga',jenis='$jenis',stok='$stok',penjual='$penjual' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM menu WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $name = $user_data['name'];
    $jenis = $user_data['jenis'];
    $harga = $user_data['harga'];
    $stok = $user_data['stok'];
    $penjual = $user_data['penjual'];
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
                <td>Nama</td>
                <td><input type="text" name="name" value=<?php echo $name; ?>></td>
            </tr>
            <tr>
                <td>jenis</td>

                <td> <select name="jenis">

                        <option value="makanan">makanan</option>
                        <option value="minuman">minuman</option>
                    </select>


                </td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga; ?>></td>
            </tr>
            <tr>
                <td>stok</td>
                <td><input type="text" name="stok" value=<?php echo $stok; ?>></td>
            </tr>
            <tr>
                <td>penjual</td>+
                <td>
                    <select name="id">
                        <?php while ($sisi = mysqli_fetch_array($users)) : ?>
                            <option value="<?= $sisi['id']; ?>"><?= $sisi['name']; ?></option>
                            <?php
                            while ($data = mysqli_fetch_array($users)) {
                                $selected = $id == $data['id'] ? 'selected' : 'asdsa';
                                echo '<option value="' . $data['$id'] . '"' . $selected . '> ' . $data['name'] . '
                            </option>';
                            }
                            ?>
                        <?php endwhile; ?>

                    </select>
                </td>
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