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
    require 'functions.php' ;

    if(isset($_POST['registrasi'])) {
        if(registrasi($_POST) > 0) {
            echo "<script>
                    alert('Username baru berhasil ditambahkan. Silahkan login!') ;
                    document.location.href = 'login.php' ;
                 </script>" ;           
        } else {
            echo 'User gagal ditambahkan!' ;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h3>Form Registrasi</h3>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="">Username : 
                    <input type="text" name="username" autocomplete="off" autofocus required>
                </label>
            </li>
            <li>
                <label for="">Password : 
                    <input type="password" name="password1" required>
                </label>
            </li>
            <li>
                <label for="">Konfirmasi Password : 
                    <input type="password" name="password2" required>
                </label>
            </li>
            <li>
                <button type="submit" name="registrasi">Registrasi</button>
            </li>
        </ul>
    </form>
</body>
</html>