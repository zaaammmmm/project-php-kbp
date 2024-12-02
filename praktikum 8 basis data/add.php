<!DOCTYPE html>
<html>
<head>
    <title>Add Users</title>
</head>
<body>
    <!-- Navigation link to go back to the home page -->
    <a href="index.php">Go to Home</a>
    
    <!-- Form to collect user data (name, email, mobile) -->
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>kdbrg</td>
                <td><input type="text" name="kdbrg"></td>
            </tr>
            <tr>
                <td>namabrg</td>
                <td><input type="text" name="namabrg"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    // Check if the form is submitted
    if(isset($_POST['Submit'])) {
        // Get form data
        $kdbrg = $_POST['kdbrg'];
        $namabrg = $_POST['namabrg'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        // Include database connection file
        include_once("config.php");

        // Insert form data into the 'users' table in the database
        $result = mysqli_query($mysqli, "INSERT INTO barang(kdbrg,namabrg,harga,stok) VALUES('$kdbrg','$namabrg','$harga','$stok')");

        // Show success message after adding the user
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>