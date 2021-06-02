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

    // mengambil id dari ul 
    $id = $_GET['id'] ;

    if ( hapus($id) > 0 ) {
        echo "<script>
                alert('data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('data gagal dihapus!');
                document.location.href = 'index.php';
            </script>";
    }
?>