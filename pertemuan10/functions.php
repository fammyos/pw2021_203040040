<?php 
    function koneksi() {
        return mysqli_connect("localhost", "root", "", "pw_203040040");
    }

    function query($query) {
        $conn = koneksi() ;

        $result = mysqli_query($conn, "$query");

        // jika hasilnya hanya 1 data 
        if(mysqli_num_rows($result) == 1) {
            return mysqli_fetch_assoc($result) ;
        }
        
        while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
        }

        return $rows ;
    }

    function tambah($data) {
    // ambil data dari tiap elemen dalam form
    $conn = koneksi();
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $img = htmlspecialchars($data['img']);

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES('', '$img', '$nrp', '$nama', '$email', '$jurusan')";

        mysqli_query($conn, $query);

        echo mysqli_error($conn) ;

        return mysqli_affected_rows($conn) ;

    }
?>