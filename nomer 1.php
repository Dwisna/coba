<?php
// Tanggal lahir pengguna
$birthdate = "1888-10-30";

// Menghitung usia pengguna
$today = date("Y-m-d");
$age = date_diff(date_create($birthdate), date_create($today))->y;

// Pengecekan usia
if ($age >= 18) {
    echo "Anda diperbolehkan mengikuti lomba tingkat dewasa.";
} else {
    echo "Maaf, Anda belum memenuhi usia ini.";
}
?>