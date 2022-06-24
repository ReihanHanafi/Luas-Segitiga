<?php
    class Segitiga_model extends CI_Model {
    // Mendefinisikan konstanta untuk nilai setengah
        const ST = 0.5;
    // atribut model
        private $alas;
    // menentukan nilai $alas
    public function set_alas($a) {
        $this->alas = $a;
    }
    // mengambil nilai $alas
    public function get_alas() {
        return $this->alas;
    }
    // atribut model
    private $tinggi;
    // menentukan nilai $tinggi
    public function set_tinggi($t){    
    $this->tinggi = $t;
    }
    // mengambil nilai $tinggi
    public function get_tinggi() {
        return $this->tinggi;
    }
    // Menghitung Luas Segitiga
    public function hitung_luas() {
        return self::ST * $this->alas * $this->tinggi;
    }
}
?>