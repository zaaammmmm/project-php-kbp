<?php
if (!isset($_POST["submit"])) {
    header("Location: index.php");
}

$nama = trim($_POST["nama"]);
$email = trim($_POST["email"]);

if (empty($nama)) {
    $pesan = urlencode("Nama harus diisi");
    header("Location: index.php?pesan=$pesan");
    die();
}

if (empty($email)) {
    $pesan = urlencode("Email harus diisi");
    header("Location: index.php?pesan=$pesan");
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
echo "Nama: ".$_POST["nama"]."<br>";
echo "Email: ".$_POST["email"]."<br>";
if (isset($_POST["belajar"])) {
        echo "Belajar: ".$_POST["belajar"]."<br>";
    }
?>
</body>
</html>