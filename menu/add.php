<html>

<head>
    <title>Add menu</title>
</head>

<body>
    <a href="index.php">Go to Home</a>

    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name"></td>
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
                <td><input type="text" name="harga"></td>
            </tr>

            <tr>
                <td>stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <td>penjual</td>
            <td>
                <select name="id">
                    <?php
                    include_once("../config.php");
                    // Fetch all menu data from database
                    $name = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
                    while ($data = mysqli_fetch_array($name)) {
                        echo '<option value=' . $data["id"] . '>' . $data["name"] . ' </option>';
                    }


                    ?>
                </select>
            </td>
            </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
            <tr>

        </table>
    </form>



    </select>
</body>

</html>