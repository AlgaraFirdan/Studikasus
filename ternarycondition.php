<?php
// Program Penentuan Harga Tiket Bioskop
// -------------------------------------
// Pengunjung mendapat diskon jika:
// - Usia di bawah 12 tahun, atau
// - Status sebagai pelajar (true)

// Harga normal: Rp 50.000
// Harga diskon: Rp 40.000

// Data pengunjung
$usia = 17;
$pelajar = true;

// Menggunakan ternary operator untuk menentukan harga
// Jika usia < 12 atau pelajar, maka harga diskon
$harga = ($usia < 12 || $pelajar) ? 40000 : 50000;

// Tampilkan harga tiket
echo "Harga tiket kamu adalah Rp " . number_format($harga, 0, ',', '.');
?>
