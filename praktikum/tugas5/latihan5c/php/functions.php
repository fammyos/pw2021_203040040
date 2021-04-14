<?php 
    // fungsi untuk melakukan koneksi ke database
    function koneksi() {
    $connect = mysqli_connect("localhost", "root", "") ;
    mysqli_select_db($connect, "pw_tubes_203040040") ;
    
    return $connect ;
    }

    // fungsi untuk melakukan query dan memasukannya kedalam array
    function query($sql) {
        $connect = koneksi() ;
        $hasil = mysqli_query($connect, "$sql") ;
        $rows = [] ;
        while( $row = mysqli_fetch_assoc($hasil) ) {
            $rows [] = $row ;
        } 
        return $rows ;
    } 

    function tambah($data) {
        $conn = koneksi() ; 
        // ambil data dari tiap elemen dalam form
        $img = htmlspecialchars($data["img"]) ;
        $name = htmlspecialchars($data["name"]) ;
        $size = htmlspecialchars($data["size"]) ;
        $brand = htmlspecialchars($data["brand"]) ;
        $price = htmlspecialchars($data["price"]) ;
        $category = htmlspecialchars($data["category"]) ;

        $query = "INSERT INTO baju VALUES ('', '$img', '$name', '$size', '$brand', '$price', '$category')" ;
        mysqli_query($conn, $query) ;

        return mysqli_affected_rows($conn) ;
    }

    function delete($id) {
        $conn = koneksi() ;
        mysqli_query($conn, "DELETE FROM baju WHERE id = $id") ;
        return mysqli_affected_rows($conn) ; 
    }
?>