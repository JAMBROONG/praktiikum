<?php
include_once "atas.php";
?>
<div class="card">
    <div class="card-header">
        Sistem Penilaian
    </div>
    <div class="card-body pl-5 pr-5">
        <h4>Form Penilaian</h4>
        <hr>
        <form method="POST" action="nilai_siswa.php">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="matkul">Mata Kuliah</label><br>
                <select name="matkul" id="matkul" class="custom-select" required>
                    <option value="">---</option>
                    <option value="Pemrograman Web Lanjutan">Pemrograman Web Lanjutan</option>
                    <option value="UI/UX">UI/UX</option>
                    <option value="Basis Data">Basis Data</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="uts">Nilai UTS</label>
                <input type="text" name="uts" id="uts" class="form-control" placeholder="Nilai UTS" required>
            </div>
            <div class="form-group">
                <label for="uas">Nilai UAS</label>
                <input type="text" name="uas" id="uas" class="form-control" placeholder="Nilai UAS" required>
            </div>
            <div class="form-group">
                <label for="tugas">Nilai Tugas/Praktikum</label>
                <input type="text" name="tugas" id="tugas" class="form-control" placeholder="Nilai Tugas/Praktikum" required>
            </div>
            <button type="submit" name="proses" value="Sistem Penilaian" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </form>
    </div>
</div>
<?php
include_once "bawah.php";
?>