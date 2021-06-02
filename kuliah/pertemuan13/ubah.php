<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 13 (28 Mei 2021)
    Materi Minggu Ini Mempelajari tentang AJAX dan Upload
*/ 

    session_start() ;

    if(!isset($_SESSION['login'])) {
     header("Location: login.php") ;
    }

    require 'functions.php' ;

    // jika tidak ada id di url 
    if(!isset($_GET['id'])) {
        header("Location: index.php") ;
        exit ;
    }

    // ambil id dari url
    $id = $_GET['id'] ; 

    // query mahasiswa berdasarkan id
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id") ;

    // cek apakah tombol ubah sudah ditekan
    if(isset($_POST["ubah"])) {
        if ( ubah($_POST) > 0 ) {
            echo "<script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>";
        } else {
            echo "<script>
                    alert('data gagal diubah!');
                    document.location.href = 'index.php';
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>

    <h3>Form Ubah Data Mahasiswa</h3>
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mahasiswa['id'] ; ?>">
        <ul>

            <li>
                <label>
                    Nama : 
                    <input type="text" name="nama" autofocus required value="<?= $mahasiswa['nama'] ; ?>">
                </label>
            </li>

            <li>
                <label>
                    NRP : 
                    <input type="text" name="nrp" required value="<?= $mahasiswa['nrp'] ; ?>">
                </label>
            </li>

            <li>
                <label>
                    Email : 
                    <input type="text" name="email" required value="<?= $mahasiswa['email'] ; ?>">
                </label>
            </li>

            <li>
                <label>
                    Jurusan: 
                    <input type="text" name="jurusan" required value="<?= $mahasiswa['jurusan'] ; ?>">
                </label>
            </li>

            <li>
            <input type="hidden" name="img_lama" value="<?= $mahasiswa['img'] ; ?>">
                <label>
                    Gambar : 
                    <input type="file" name="img" class="img" onchange="previewImage()">
                </label>
                <img src="img/<?= $mahasiswa['img'] ; ?>" width="120" style="display: block;" class="img-preview">
            </li>

            <li>
                <button type="submit" name="ubah">Ubah Data</button>
            </li>
        </ul>
    </form>
    

    <script src="js/script.js"></script>

</body>
</html>