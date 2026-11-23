<?php
// Memanggil file functions.php menggunakan require_once
require_once 'fungsi.php';

echo "<h3>Drill 1: Format Rupiah</h3>";
echo "<p>" . formatRupiah(12500) . "</p>";

echo "<h3>Drill 2: Hitung Diskon</h3>";
echo "<p>Diskon harga 100.000 (default 10%): " . formatRupiah(hitungDiskon(100000)) . "</p>";
echo "<p>Diskon harga 100.000 (custom 20%): " . formatRupiah(hitungDiskon(100000, 20)) . "</p>";

echo "<h3>Drill 3: Predikat Nilai</h3>";
echo "<p>Nilai 90 mendapat predikat: " . cekPredikat(90) . "</p>";
?>
