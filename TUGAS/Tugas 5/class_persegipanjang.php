<?php
class PersegiPanjang {

    // Properti
    private $panjang;
    private $lebar;

    // Constructor
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // Method untuk menghitung luas
    public function getLuas() {
        return $this->panjang * $this->lebar;
    }

    // Method untuk menghitung keliling
    public function getKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
