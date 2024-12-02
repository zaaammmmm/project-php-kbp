<?php
include_once("config.php"); // Menghubungkan dengan database menggunakan file config
$result = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY kdbrg DESC"); // Mengambil semua data dari tabel 'barang' dan mengurutkan berdasarkan 'kdbrg'
?>

<html>
<head>
    <title>Homepage</title>
    <script>
        function tampilkanTabel() {
            // Menyembunyikan link "Isi Data Baru" dan "Tampilkan Data"
            document.getElementById('linkIsiData').style.display = 'none';
            document.getElementById('linkTampilkanData').style.display = 'none';
            
            // Menampilkan tabel data barang
            document.getElementById('tabelBarang').style.display = 'block';
        }
    </script>
    <style>
        /* Menyembunyikan tabel secara default */
        #tabelBarang {
            display: none;
        }
    </style>
</head>

<body>
    <a href="add.php" id="linkIsiData">Isi Data Baru</a><br/><br/>
    <a href="javascript:tampilkanTabel()" id="linkTampilkanData">Tampilkan Data</a><br/><br/>

    <!-- Tabel Data Barang -->
    <div id="tabelBarang">
        <h2>Data Barang</h2>
        <a href="index.php">Go to Home</a><br/><br/> <!-- Tombol Go to Home -->
        <table width='80%' border='1'>
            <tr>
                <th>Kode Barang</th> <th>Nama Barang</th> <th>Harga</th> <th>Stok</th> <th>Aksi</th>
            </tr>

            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['kdbrg'] . "</td>";
                echo "<td>" . $user_data['namabrg'] . "</td>";
                echo "<td>" . $user_data['harga'] . "</td>";
                echo "<td>" . $user_data['stok'] . "</td>";
                echo "<td><a href='edit.php?kdbrg=" . $user_data['kdbrg'] . "'>Edit</a> | <a href='delete.php?kdbrg=" . $user_data['kdbrg'] . "'>Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
