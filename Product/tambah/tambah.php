<?php 

    include "../config/config.php";

    $product = query("SELECT * FROM product");

    // if(isset($_POST['simpan']))
    // {
    //     // $gambar     = $_POST['gambar'];
    //     // $nama       = $_POST['nama'];
    //     // $detail     = $_POST['detail'];
    //     // $harga      = $_POST['harga'];

    //     echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan... </h5></div>";
    //     echo "<meta http-equiv='refresh' content='1;url=http://localhost/ajf_donuts/ajf_donuts/ajf_donuts/Product/admin/admin.php'>";
    // }

    if( isset($_POST['simpan'])) {

    
        if(simpan($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = '../admin/admin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'tambah.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belajar CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Customer
            </div>
            <div class="card-body">
                <form action="" method="post" class="form-item" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control col-md-9" placeholder="Masukan Gambar">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control col-md-9" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="detail">Detail</label>
                        <input type="text" name="detail" id="detail" class="form-control col-md-9" placeholder="Detail">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control col-md-9" placeholder="Masukan Harga">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>

                </form>
            </div>
        </div>
    </div>

</body>
</html>