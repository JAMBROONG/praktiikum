<?php
include_once "atas.php";
require_once 'libfungsi.php';
$proses= $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];

$hsl_uts = $nilai_uts * 30 / 100;
$hsl_uas = $nilai_uas * 35 / 100;
$hsl_tugas = $nilai_tugas * 35 / 100;

$hsl_total = $hsl_uts + $hsl_uas + $hsl_tugas;

$grade = grade($hsl_total);
$hsl_ujian = kelulusan($hsl_total);
$predikat = predikat($grade);


if(!empty($proses)) {
?>
<div class="card">
    <div class="card-header">
        <h4>Sistem Penilaian</h4>
    </div>
    <div class="card-body">
        <ul class="products-list product-list-in-card pl-2 pr-2">
            <li class="item"><?php echo 'Proses : '.$proses; ?></li>
            <li class="item"><?php echo 'Nama : '.$nama_siswa; ?></li>
            <li class="item"><?php echo 'Mata Kuliah : '.$mata_kuliah; ?></li>
            <li class="item"><?php echo 'Nilai UTS : '.$nilai_uts; ?></li>
            <li class="item"><?php echo 'Nilai UAS : '.$nilai_uas; ?></li>
            <li class="item"><?php echo 'Nilai Tugas/Praktikum : '.$nilai_tugas; ?></li>
            <li class="item"><?php echo 'Nilai Total : '.$hsl_total; ?></li>
            <li class="item"><?php echo 'Grade : '.$grade; ?></li>
            <li class="item"><?php echo 'Predikat : '.$predikat; ?></li>
            <li class="item"><?php echo 'Dinyatakan : '.$hsl_ujian; ?></li>
        </ul>
    </div>
</div>
<?php
}
include_once "bawah.php";
?>