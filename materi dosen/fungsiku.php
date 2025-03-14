<?php
/** 
 * Fungsi untuk menghitung nilai akhir
 * @param float $nilai_uts Nilai UTS
 * @param float $nilai_uas Nilai UAS
 * @param float $nilai_tugas Nilai Tugas
 * @return float Nilai akhir
 */
function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas){
    define("UTS", 0.25);
    define("UAS", 0.30);
    define("TUGAS", 0.45);
    return UTS*$nilai_uts + UAS*$nilai_uas + TUGAS*$nilai_tugas;
}

/**
 * Fungsi untuk menentukan kelulusan
 * @param float $nilai_akhir Nilai akhir
 * @param float $batas_nilai Nilai batas kelulusan default 60
 * @return string LULUS ATAU TIDAK LULUS
 */
 function kelulusan($nilai_akhir, $batas_nilai =60){
    if ($nilai_akhir >= $batas_nilai) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}