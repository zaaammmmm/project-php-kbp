<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;
    
    public function __construct($jenis, $merek, $stok) {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}

class Televisi extends Produk {
    public function __construct($jenis, $merek, $stok) {
        parent::__construct($jenis, $merek, $stok); // Memanggil constructor dari kelas Produk
    }
}
$produk01 = new Televisi("Televisi", "Samsung", 20);

echo "<pre>";
print_r($produk01);
echo "</pre>";