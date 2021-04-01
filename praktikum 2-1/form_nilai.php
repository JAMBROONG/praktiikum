<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SAS-STTNF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header role="banner"><h2>Student Activity Score -STTNF</h2><a href="#">Home</a> | <a href="#">Activity</a> | <a href="form_nilai.php">My Score</a>| <a href="#">Login</a><hr/>
        </header>
<?php
$ns1 = ['id'=>1,'nim'=>'01101','nama'=>'Budi Sudarsono','matkul'=>'Pemrograman Web Lanjutan','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','nama'=>'Bambang Pamungkas','matkul'=>'Basis Data','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','nama'=>'Ismet Sofyan','matkul'=>'Jaringan Komputer','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','nama'=>'Cristian Gonzalez','matkul'=>'UI/UX','uts'=>90,'uas'=>91,'tugas'=>82];

if (isset($_POST['proses'])){
    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
    $ns_baru = ['id'=>$_POST['id'],'nim'=>$_POST['nim'],'nama'=>$_POST['nama'],'matkul'=>$_POST['matkul'],'uts'=>$_POST['uts'],'uas'=>$_POST['uas'],'tugas'=>$_POST['tugas']];
    array_push($ar_nilai, $ns_baru);
}else{
    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
}

?>
<div class="card">
    <div class="card-header">
        Sistem Penilaian
    </div>
    <div class="card-body pl-5 pr-5">

    <h3>Daftar Nilai Siswa</h3>
<table class="table table-bordered table-striped">
<thead>
    <tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Mata Kuliah</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>Tugas</th>
    <th>Nilai Akhir</th>
    </tr>
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach($ar_nilai as $ns){
        $nilai_akhir  = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3; 
    ?>

    <tr>
        <td><?php echo $nomor;?></td>
        <td><?php echo $ns['nim'];?></td>
        <td><?php echo $ns['nama'];?></td>
        <td><?php echo $ns['matkul'];?></td>
        <td><?php echo $ns['uts'];?></td>
        <td><?php echo $ns['uas'];?></td>
        <td><?php echo $ns['tugas'];?></td>
        <td><?php echo number_format($nilai_akhir,2,',','.'); ?></td>
    </tr>
    <?php
        $nomor++;
    }
    ?>
</tbody>
</table>

        <h4>Form Penilaian</h4>
        <hr>
        <form method="POST">
        <div class="form-group">
                <label for="nim">Nomor NIM</label>
                <input type="text" name="nim" id="nim" class="form-control" placeholder="Nomor NIM" required>
            </div>
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
                <input type="text" name="uts" id="uts" class="form-control" placeholder="Nilai UTS (Input Wajib Angka)" onkeypress="return hanyaAngka(event)" required>
            </div>
            <div class="form-group">
                <label for="uas">Nilai UAS</label>
                <input type="text" name="uas" id="uas" class="form-control" placeholder="Nilai UAS (Input Wajib Angka)" onkeypress="return hanyaAngka(event)" required>
            </div>
            <div class="form-group">
                <label for="tugas">Nilai Tugas/Praktikum</label>
                <input type="text" name="tugas" id="tugas" class="form-control" placeholder="Nilai Tugas/Praktikum (Input Wajib Angka)" onkeypress="return hanyaAngka(event)" required>
            </div>
            <input type="hidden" name="id" value="<?php echo $nomor+1; ?>">
            <button type="submit" name="proses" value="Sistem Penilaian" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </form>
    </div>
</div>

<footer><p>Created by <a href="http://nurulfikri.ac.id">Pusinfo NF &copy;2017</a></p></footer>
</div>
</body>
<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
</html>