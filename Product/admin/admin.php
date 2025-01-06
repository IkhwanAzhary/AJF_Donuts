<?php 
include "../config/config.php";
$product = query("SELECT * FROM product");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Product
            </div>
            <div class="card-body">
                <a href="../tambah/tambah.php" class="btn btn-primary">Tambah Data</a>
                <a href="../logout/logout.php" class="btn btn-danger">Lougout</a>
                <table class="table table-bordered">
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Detail</th>
                        <th>Harga</th>
                    </tr>

                    <?php $i = 1; ?>
                    <?php foreach ($product as $pdt) : ?>
                        <tr>
                            <td><img src="../img/<?= $pdt["gambar"]; ?>" width="150"></td>
                            <td> <?= $pdt["nama"]; ?></td>
                            <td> <?= $pdt["detail"]; ?></td>
                            <td> <?= $pdt["harga"]; ?></td>
                            <td>
                                <a href="../edit/edit.php?id=<?= $pdt["id"]; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="../hapus/hapus.php?id=<?= $pdt["id"]; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

</body>
</html>