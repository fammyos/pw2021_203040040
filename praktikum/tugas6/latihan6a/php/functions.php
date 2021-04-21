<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

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

    function update($data) {
        $conn = koneksi() ; 
        // ambil data dari tiap elemen dalam form
        $id = $data["id"] ;
        $img = htmlspecialchars($data["img"]) ;
        $name = htmlspecialchars($data["name"]) ;
        $size = htmlspecialchars($data["size"]) ;
        $brand = htmlspecialchars($data["brand"]) ;
        $price = htmlspecialchars($data["price"]) ;
        $category = htmlspecialchars($data["category"]) ;

        $query = "UPDATE baju SET
                    img = '$img',
                    name = '$name',
                    size = '$size' ,
                    brand = '$brand',
                    price = '$price',
                    category = '$category'
                    WHERE id = $id
                 ";
        mysqli_query($conn, $query) ;

        return mysqli_affected_rows($conn) ;
    }

    function cari($keyword) {
        $query = "SELECT * FROM baju WHERE 
                    name LIKE '%$keyword%' OR
                    size LIKE '%$keyword%' OR
                    brand LIKE '%$keyword%' OR
                    category LIKE '%$keyword%'
                 " ;

        return query($query) ;
    }
    
?>