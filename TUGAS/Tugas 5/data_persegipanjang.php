<?php
require_once('class_persegipanjang.php');

// Input data
$panjang1 = 20;
$lebar1 = 5;
$panjang2 = 10;
$lebar2 = 10;

// Buat objek Persegi Panjang
$persegipanjang1 = new PersegiPanjang($panjang1, $lebar1);
$persegipanjang2 = new PersegiPanjang($panjang2, $lebar2);

// Hitung dan tampilkan luas dan keliling
echo "Luas Persegi Panjang 1: " . $persegipanjang1->getLuas() . "<br>";
echo "Keliling Persegi Panjang 1: " . $persegipanjang1->getKeliling() . "<br>";
echo "<br>";
echo "Luas Persegi Panjang 2: " . $persegipanjang2->getLuas() . "<br>";
echo "Keliling Persegi Panjang 2: " . $persegipanjang2->getKeliling() . "<br>";
