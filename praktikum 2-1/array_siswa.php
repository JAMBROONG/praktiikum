<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>

<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
    <tr>
    <th>No</th>
    <th>NIM</th>
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