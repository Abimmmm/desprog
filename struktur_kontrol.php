<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet Tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total Skor Ujian adalah : $totalSkor";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai  < 60) {
        echo "Nilai : $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (lulus) <br>";
}

echo "<br><br>";

// Tugas 4.6
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$nilaiTertinggi1 = $nilai[0];
$nilaiTertinggi2 = $nilai[0];
$nilaiTerendah1 = $nilai[0];
$nilaiTerendah2 = $nilai[0];

foreach ($nilai as $n) {
    if ($n > $nilaiTertinggi1) {
        $nilaiTertinggi2 = $nilaiTertinggi1;
        $nilaiTertinggi1 = $n;
    } elseif ($n > $nilaiTertinggi2) {
        $nilaiTertinggi2 = $n;
    }

    if ($n < $nilaiTerendah1) {
        $nilaiTerendah2 = $nilaiTerendah1;
        $nilaiTerendah1 = $n;
    } elseif ($n < $nilaiTerendah2) {
        $nilaiTerendah2 = $n;
    }
}

$total = 0;
foreach ($nilai as $n) {
    $total += $n;
}

$totalNilai = $total - ($nilaiTertinggi1 + $nilaiTertinggi2 + $nilaiTerendah1 + $nilaiTerendah2);

echo "Total nilai (setelah mengabaikan 2 tertinggi & 2 terendah): $totalNilai<br>";
echo "<br><br>";

// Tugas 4.7
$hargaProduk = 120000;
$diskon = 0.20;

if ($hargaProduk > 100000) {
    $hargaBayar = $hargaProduk - ($hargaProduk * $diskon);
} else {
    $hargaBayar = $hargaProduk;
}

echo "Harga yang harus dibayar setelah diskon: Rp $hargaBayar<br>";

echo "<br><br>";

// Tugas 4.8
$poin = 620;

echo "Total skor pemain adalah: $poin<br>";

if ($poin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA<br>";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK<br>";
}

?>