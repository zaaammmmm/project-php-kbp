<?php
class Produk {
    private $merek;
    private function hello() {
        return"ini adalah Produk";
    }
}

$produk01 = new Produk();

// fatal error: cannot access private property
$produk01->merek = "Asus";

// fatal error: cannot access private property
echo $produk01->merek;
echo "<br>";

// fatal error: cannot access private property
echo $produk01->hello();

// error karena properti dan metode dalam kelas Produk dideklarasikan sebagai private. Properti dan metode private hanya bisa diakses dari dalam kelas itu sendiri.