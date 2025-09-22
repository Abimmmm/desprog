<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;


echo "<h3>Operator Aritmatika</h3>";
echo "a + b = $hasilTambah <br>";
echo "a - b = $hasilKurang <br>";
echo "a * b = $hasilKali <br>";
echo "a / b = $hasilBagi <br>";
echo "a % b = $sisaBagi <br>";
echo "a ** b = $pangkat <br>";

echo "<h3>Operator Perbandingan</h3>";
echo "a == b : "; var_dump($hasilSama); echo "<br>";
echo "a != b : "; var_dump($hasilTidakSama); echo "<br>";
echo "a < b : "; var_dump($hasilLebihKecil); echo "<br>";
echo "a > b : "; var_dump($hasilLebihBesar); echo "<br>";
echo "a <= b : "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "a >= b : "; var_dump($hasilLebihBesarSama); echo "<br>";

echo "<h3>Operator Logika</h3>";
echo "a && b : "; var_dump($hasilAnd); echo "<br>";
echo "a || b : "; var_dump($hasilOr); echo "<br>";
echo "!a : "; var_dump($hasilNotA); echo "<br>";
echo "!b : "; var_dump($hasilNotB); echo "<br>";

echo "<h3>Operator Assignment</h3>";
echo "a += b, a -= b, a *= b, a /= b, a %= b -> Nilai akhir a = $a <br>";

echo "<h3>Operator Identitas</h3>";
echo "a === b : "; var_dump($hasilIdentik); echo "<br>";
echo "a !== b : "; var_dump($hasilTidakIdentik); echo "<br>";

// TUGAS langkah 16
$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "<h3>Perhitungan Kursi Kosong Restoran</h3>";
echo "Total kursi: $totalKursi <br>";
echo "Kursi terisi: $kursiTerisi <br>";
echo "Kursi kosong: $kursiKosong <br>";
echo "Persentase kursi kosong: $persentaseKosong % <br>";

?>