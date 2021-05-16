<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 12 (7 Mei 2021)
    Materi Minggu Ini Mempelajari tentang Login
*/ 
?>

<?php 
    function koneksi() {
        return mysqli_connect("localhost", "root", "", "pw_203040040");
    }

    function query($query) {
        $conn = koneksi() ;

        $result = mysqli_query($conn, "$query");

        $rows = [] ;

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
    $query = "INSERT INTO mahasiswa VALUES('', '$img', '$nama', '$nrp', '$email', '$jurusan')";

        mysqli_query($conn, $query);

        echo mysqli_error($conn) ;

        return mysqli_affected_rows($conn) ;

    }

    function hapus($id) {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
        return mysqli_affected_rows($conn);
    }
    
    function ubah($data)
    {
        // ambil data dari tiap elemen dalam form
        $conn = koneksi();
        $id = $data['id'];
        $nrp = htmlspecialchars($data['nrp']);
        $nama = htmlspecialchars($data['nama']);
        $email = htmlspecialchars($data['email']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $img = htmlspecialchars($data['img']);
    
        // query update data
        $query ="UPDATE mahasiswa SET
                    nrp = '$nrp',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    img = '$img'
                 WHERE id = $id";
                    
        mysqli_query($conn, $query) or die(mysqli_error($conn));
        echo mysqli_error($conn);
    
        return mysqli_affected_rows($conn);
    }
    
    function cari($keyword) 
    {
        $conn =  koneksi();
    
        $query = "SELECT * FROM mahasiswa 
                    WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%'";
        
        $result =  mysqli_query($conn, $query);
    
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function login($data) {
        $conn = koneksi() ;
        
        $username = htmlspecialchars($data['username']) ;
        $password = htmlspecialchars($data['password']) ;

        if($user = query("SELECT * FROM user WHERE username = '$username'")) {
            // cek password
            if(password_verify($password, $user['password'])) {
                // set session
                $_SESSION['login'] = true ;


                header("Location: index.php") ;
                exit ;                
            }
        }
            return [
                "error" => true,
                'pesan' => 'Username atau Password Salah!'
            ] ;
    }

    function registrasi($data) {
        $conn = koneksi() ;

        $username = htmlspecialchars(strtolower($data['username'])) ;
        $password1 = mysqli_real_escape_string($conn, $data['password1']) ;
        $password2 = mysqli_real_escape_string($conn, $data['password2']) ;

        // Jika username atau password kosong
        if(empty($username) || empty($password1) || empty($password2)) {
            echo "<script>
                    alert('Username / Password tidak boleh kosong!') ;
                    document.location.href = 'registrasi.php' ;
                 </script>" ;
            
            return false ;
        }

        // jika username sudah ada 
        if(query("SELECT * FROM user WHERE username = '$username'")) {
            echo "<script>
                    alert('Username sudah terdaftar!') ;
                    document.location.href = 'registrasi.php' ;
                 </script>" ;
            
            return false ;            
        }

        // jika konfirmasi password tidak sesuai
        if($password1 !== $password2) {
            echo "<script>
                    alert('Konfirmasi Password tidak sesuai!') ;
                    document.location.href = 'registrasi.php' ;
                 </script>" ;
            
            return false ;
        }

        // jika minimal password lebih kecil dari 5 digit
        if(strlen($password1) < 5) {
            echo "<script>
                    alert('Password terlalu pendek!') ;
                    document.location.href = 'registrasi.php' ;
                 </script>" ;
            
            return false ;            
        }

        // jika username dan password sudah sesuai
        // enkripsi password
        $password_baru = password_hash($password1, PASSWORD_DEFAULT) ;

        // insert ke tabel user
        $query = "INSERT INTO user VALUES (null, '$username', '$password_baru')" ;

        mysqli_query($conn, $query) or die(mysqli_error($conn)) ;

        return mysqli_affected_rows($conn) ;
    }
?>