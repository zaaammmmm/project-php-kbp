<?php
include_once("config.php"); // include database connection file

if (isset($_POST['update'])) { // Check if form is submitted for update
    $kdbrg = $_POST['kdbrg'];
    $namabrg = $_POST['namabrg'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // update data barang
    $result = mysqli_query($mysqli, "UPDATE barang SET namabrg='$namabrg', harga='$harga', stok='$stok' WHERE kdbrg='$kdbrg'");

    // Redirect to homepage to display updated data
    header("Location: index.php");
}

// Display selected user data based on kdbrg
$kdbrg = $_GET['kdbrg'];
$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE kdbrg='$kdbrg'");

while ($user_data = mysqli_fetch_array($result)) {
    $kdbrg = $user_data['kdbrg'];
    $namabrg = $user_data['namabrg'];
    $harga = $user_data['harga'];
    $stok = $user_data['stok'];
}
?>

<html>
<head>
    <title>Edit Data Barang</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_barang" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kdbrg" value="<?php echo $kdbrg; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="namabrg" value="<?php echo $namabrg; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $harga; ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value="<?php echo $stok; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
