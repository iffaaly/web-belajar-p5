<?php
// Drill 1: Fungsi formatRupiah
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// Drill 2: Fungsi hitungDiskon dengan default parameter (persen = 10)
function hitungDiskon($harga, $persen = 10) {
    return $harga * ($persen / 100);
}

// Drill 3: Fungsi predikat nilai (A-E) & uji scope variabel
function cekPredikat($nilai) {
    // Variabel $total di dalam fungsi ini bersifat lokal (tidak bisa dibaca di luar fungsi)
    $total = $nilai; 
    
    if ($nilai >= 85) return "A (Total: $total)";
    elseif ($nilai >= 70) return "B (Total: $total)";
    elseif ($nilai >= 55) return "C (Total: $total)";
    elseif ($nilai >= 40) return "D (Total: $total)";
    else return "E (Total: $total)";
}
?>
