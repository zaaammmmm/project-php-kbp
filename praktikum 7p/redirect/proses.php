<?php
if (!isset($_POST["submit"])) {
    header("Location: index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <tittle>Belajar PHP</tittle>
</head>
<body>
<h1>Halaman Proses</h1>
<?php
    echo "Nama: ".$_POST["zam"]."<br>";
    echo "Email: ".$_POST["email"]."<br>";

if (isset($_POST["belajar"])) {
        echo "Belajar: ".$_POST["belajar"]."<br>";
    }
?>
</body>
</html>