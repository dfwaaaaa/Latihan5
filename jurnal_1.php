<?php

$pilihan = (int)readline("Masukkan pilihan disini: ");
$total = 0.0; 
$jumlah_angka = 0;
$angka = 1; 

# Looping input angka 
while ($angka >= 0){ // inisialisasi angka positif
    $angka = (float)readline("Masukkan angka: ");
    if ($angka < 0){ // inisialisasi angka negatif
        break;
    }
    $total += $angka; // Buat tambah
    $jumlah_angka++; // Jumlah angka di tambah 1
}

if ($pilihan == 1) {
    $hasil = $total / $jumlah_angka; 
    echo "Hasil Rata-rata: " .$hasil;
} else if ($pilihan == 2) {
    echo "Hasil Penjumlahan" .$total;
} else if ($pilihan == 3) {
    $hasil = $total / $jumlah_angka;
    echo "Hasil untuk rata-rata adalah " . $hasil . "\nHasil untuk penjumlahan adalah " . $total;
} else {
    echo "Keluar";
}
?>