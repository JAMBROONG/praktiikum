<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Belanja Online</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <label for="customer">Customer</label>
                            <input type="text" name="customer" id="customer" class="form-control" placeholder="Nama Customer" required><br>

                            <label>Pilihan Produk</label><br>
                            <input type="radio" name="produk" id="tv" class="custom-radio" value="TV" required>
                            TV

                            <input type="radio" name="produk" id="kulkas" class="custom-radio" value="Kulkas" required>
                            Kulkas

                            <input type="radio" name="produk" id="mesincuci" class="custom-radio" value="Mesin Cuci" required>
                            Mesin Cuci<br>

                            <label for="jumlah">Jumlah</label>
                            <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah" required><br>

                            <button type="submit" name="proses" class="btn btn-success btn-xs"><i class="fas fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        Daftar Harga
                    </div>
                    <div class="card-body">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">TV : 4.200.000</li>
                            <li class="item">Kulkas : 3.100.000</li>
                            <li class="item">Mesin Cuci : 3.800.000</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-primary">
                        Harga Berubah Setiap Saat
                    </div>
                </div>
            </div>
            <div class="col-12">
                <?php
                if(isset($_POST['proses'])){
                ?>

                Nama Customer : <?php echo $_POST['customer']; ?><br>
                Produk Pilihan : <?php echo $_POST['produk']; ?><br>
                Jumlah Beli : <?php echo $_POST['jumlah']; ?><br>

                <?php
                if($_POST['produk'] == 'TV'){
                    $harga = 4200000;
                }elseif($_POST['produk'] == 'Kulkas'){
                    $harga = 3100000;
                }elseif($_POST['produk'] == 'Mesin Cuci'){
                    $harga = 3800000;
                }
                ?>
                Total Belanja : <?php echo"Rp. ".number_format($_POST['jumlah'] * $harga).",-"; ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>