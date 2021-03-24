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
?>