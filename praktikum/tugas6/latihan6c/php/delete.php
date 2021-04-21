<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: ../php/login.php");
    exit;
}

require 'functions.php' ;

    $id = $_GET["id"] ;

    if ( delete($id) > 0 ) {
        echo "<script>
                alert('Data Berhasil Dihapus!') ;
                document.location.href = '../php/admin.php' ;
              </script>
             " ;
    } else {
        echo "<script>
                alert('Data Gagal Dihapus!') ;
                document.location.href = '../php/admin.php' ;
              </script>
             " ;
    }
?>