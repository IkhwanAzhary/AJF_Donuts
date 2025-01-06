<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_ajf";
$conn = mysqli_connect($server,$user,$pass,$database);

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {    $rows[] = $row;
}

return $rows;
}

function simpan($data) {
    global $conn;

    $gambar = upload();
    if( !$gambar ) {
        return false;
    }
    // $gambar = htmlspecialchars($data["Gambar"]);
    $nama = htmlspecialchars($data["nama"]);
    $detail = htmlspecialchars($data["detail"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "INSERT INTO product
                VALUES
                (NULL, '$gambar', '$nama', '$detail','$harga')
            ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function upload() {
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if( $error === 4) {
        echo "
        <script>
            alert('pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode("." , $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
            alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    if( $ukuranfile > 1000000 ) {
        echo "
        <script>
            alert('ukuran gambar terlalu besar')
        </script>";
        return false;
    }

    $namafileBaru = uniqid();
    $namafileBaru .='.';
    $namafileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, "img/" . $namafileBaru);

    return $namafileBaru;
}
?>