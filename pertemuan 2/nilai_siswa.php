<?php

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    echo "<p>Nama : $nama</p>";
    echo "<p>Mata Kuliah : $matkul</p>";
    echo "<p>Nilai UTS : $nilai_uts</p>";
    echo "<p>Nilai UAS : $nilai_uas</p>";
    echo "<p>Nilai Tugas/Praktikum : $nilai_tugas</p>";

    // status kelulusan
    $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    // check nilai total
    if ($nilai_total >= 55) {
        echo "<h1>$nama dinyatakan lulus.</h1>";
        } else {
            echo "<p>Nilai Tidak memenuhi</p>";
        }

    switch ($nilai_total) {
        case $nilai_total >= 85 && $nilai_total <= 100 :
            $grade = "A";
            $predikat = "sangat memuaskan";
            break;
        case $nilai_total >= 70 && $nilai_total <= 84 :
            $grade = "B";
            $predikat = "memuaskan";
            break;
        case $nilai_total >= 56 && $nilai_total <= 69 :
            $grade = "C";
            $predikat = "cukup";
            break;
        case $nilai_total >= 36 && $nilai_total <= 55 :
            $grade = "D";
            $predikat = "kurang";
            break;
        case $nilai_total >= 0 && $nilai_total <= 35 :
            $grade = "E";
            $predikat = "sangat kurang";
            break;
        default: 
            $grade = "I";
            $predikat = "tidak ada nilai";
        }
        echo "<p>Grade : $grade <br/> predikat: $predikat</p>";
    }
?>