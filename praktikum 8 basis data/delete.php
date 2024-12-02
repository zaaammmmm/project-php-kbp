<?php
// include database connection file
include_once("config.php");

// Get kdbrg from URL to delete that barang
$kdbrg = $_GET['kdbrg'];

// Delete barang row from table based on given kdbrg
$result = mysqli_query($mysqli, "DELETE FROM barang WHERE kdbrg='$kdbrg'");

// After delete, redirect to Home so that the latest barang list will be displayed
header("Location: index.php");
?>
