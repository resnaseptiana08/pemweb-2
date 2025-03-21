<?php
require_once 'class_nilaimahasiswa.php';

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Budi";
$mhs1->matakuliah = "Pemprograman Web";
$mhs1->nilai_tugas = 80;
$mhs1->nilai_uts = 70;
$mhs1->nilai_uas = 85;

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Fauziah";
$mhs1->matakuliah = "Dasar-Dasar Pemprograman";
$mhs1->nilai_tugas = 90;
$mhs1->nilai_uts = 60;
$mhs1->nilai_uas = 88;

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Dino";
$mhs1->matakuliah = "Tugas Akhir";
$mhs1->nilai_tugas = 60;
$mhs1->nilai_uts = 50;
$mhs1->nilai_uas = 55;

?>
<h1 style="text-align: center;">Daftar Nilai Mahasiswa</h1>
<table border="1" cellpspacing="2" cellpadding="2" width="100%">
    <thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($sar_mahasiswa as $obj) {
            ?>
        <tr>
        <th>no</th><th>nama</th>
            <th>mata kuliah</th>
            <th>nilai tugas</th>
            <th>nilai uts</th>
            <th>nilai uas</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach([$mhs1,$mhs2,$mhs3] as $obj){
        ?>
        <tr>
            <td><?=$no ?></td>
            <td><?=$obj->nama ?></td>
            <td><?=$obj->mata_kuliah ?></td>
            <td><?=$obj->nilai_tugas ?></td>
            <td><?=$obj->nilai_uts ?></td>
            <td><?=$obj->nilai_uas ?></td>
        </tr>
        
        <?php
            $no++;
        }
        ?>
    </thead>
        </tbody>
</table>