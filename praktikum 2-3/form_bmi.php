<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/dist/css/adminlte.min.css">
</head>

<body>
    <?php
    include "class_bmipasien.php";
    ?>
    <div class="container">
        <?php
        $ar_pasien = [];
        if (isset($_POST['proses'])) {
            $bmi = new BmiPasien($_POST['berat'], $_POST['tinggi']);
            $pasien_baru = ['nama' => $_POST['nama'], 'gender' => $_POST['jk'], 'umur' => $_POST['umur'], 'berat' => $_POST['berat'], 'tinggi' => $_POST['tinggi'], 'bmi' => $bmi->hasilBMI(), 'hasil' => $bmi->statusBMI()];
            array_push($ar_pasien, $pasien_baru);

        ?>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Gender</th>
                    <th>Umur</th>
                    <th>Berat(Kg)</th>
                    <th>Tinggi(Cm)</th>
                    <th>BMI</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <?php
                    $nomor = 1;
                    foreach ($ar_pasien as $pasien) {
                    ?>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pasien['nama']; ?></td>
                        <td><?php echo $pasien['gender']; ?></td>
                        <td><?php echo $pasien['umur']; ?></td>
                        <td><?php echo $pasien['berat']; ?></td>
                        <td><?php echo $pasien['tinggi']; ?></td>
                        <td><?php echo $pasien['bmi']; ?></td>
                        <td><?php echo $pasien['hasil']; ?></td>
                <?php
                        $nomor++;
                    }
                }
                ?>
                </tr>
            </table>
            <div class="card">
                <div class="card-header">
                    Form Isian Indeks Masa Tubuh (BMI)
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            Nama <br><br> Berat Badan <br><br> Tinggi Badan <br><br> Umur <br><br> Jenis Kelamin
                        </div>
                        <div class="col-6">
                            <form method="POST">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="nama">
                                </div>

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-weight"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="berat">
                                    <div class="input-group-append">
                                        <div class="input-group-text">Kg</div>
                                    </div>
                                </div>

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-blind"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="tinggi">
                                    <div class="input-group-append">
                                        <div class="input-group-text">cm</div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-bell"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="umur">
                                    <div class="input-group-append">
                                        <div class="input-group-text">Thn</div>
                                    </div>
                                </div>

                                <input type="radio" name="jk" value="Laki-laki" class="custom-radio"> Laki-laki
                                <input type="radio" name="jk" value="Perempuan" class="custom-radio"> Perempuan

                                <br><br>
                                <input type="hiden" name="aray" value="">
                                <button type="submit" name="proses" class="btn btn-primary btn-sm">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_POST['proses'])) {
            ?>

                <div class="card">
                    <div class="card-header">
                        Hasil Evaluasi BMI
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                Nama <br> Berat/Tinggi Badan <br> Umur <br> BMI <br> Hasil
                            </div>
                            <div class="col-9">
                                <?php

                                echo $_POST['nama'] . '(' . $_POST['jk'] . ')';
                                echo '<br>';

                                echo $_POST['berat'] . '/' . $_POST['tinggi'];
                                echo '<br>';

                                echo $_POST['umur'];
                                echo '<br>';

                                echo $bmi->hasilBMI();
                                echo '<br>';

                                echo $bmi->statusBMI();
                                echo '<br>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
    </div>
</body>

</html>