<?php 
// session_start();

// if( isset($_SESSION["login"])) {
//   header("Location: login.php");
//   exit;
// }

include "../config/config.php";
$id = $_GET["id"];

$product = query("SELECT * FROM product WHERE id = $id")[0];

if (isset($_POST["edit"])) {

    if (edit($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diedit!');
            document.location.href = '../admin/admin.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diedit!');
            document.location.href = 'edit.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container col-8">
        <h1>Edit Data Sepeda</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $product["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $product["gambar"]; ?>">
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <img src="../img/?= $spt['gambar']; ?>" width="50" alt="">
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" require value="<?= $product["nama"]; ?>">
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                <input type="text" class="form-control" id="detail" name="detail" require value="<?= $product["detail"]; ?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" require value="<?= $product["harga"]; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
        </form>
    </div>
</body>
</html>