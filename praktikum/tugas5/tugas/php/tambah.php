<?php 
    // koneksi ke DBMS
    require '../php/functions.php' ;

    // // cek tombol submit sudah ditekan atau belum
    if ( isset($_POST['tambah']) ) {
        // cek data apakah berhasil atau tidak
          if ( tambah($_POST) > 0 ) {
              echo "<script>
                      alert('Data Berhasil Ditambahkan!') ;
                      document.location.href = '../index.php' ;
                    </script>
                   " ;
          } else {
            echo "<script>
                    alert('Data Gagal Ditambahkan!') ;
                    document.location.href = '../index.php' ;
                  </script>
                 " ;
          }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

    <title>Tambah Data Baju</title>
</head>
<body>
    
    <h1 class="text-center pt-5">Tambah Data</h1>

    <div class="container pt-6">
    <form action="" method="post">
    <div class="field">
    <label for="img" class="label">Image</label>
    <div class="control has-icons-left has-icons-right">
        <input class="input is-warning" type="text" placeholder="Text input" name="img" id="img">
        <span class="icon is-small is-left">
        <i class="fas fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
        <i class="fas fa-exclamation-triangle"></i>
        </span>
    </div>
    </div>
    
        <div class="field">
    <label for="name" class="label">Name</label>
    <div class="control">
        <input class="input" type="text" placeholder="Text input" name="name" id="name" required>
    </div>
    </div>

    <div class="field">
    <label for="size" class="label">Size</label>
    <div class="control has-icons-left has-icons-right">
        <input class="input is-success" type="text" placeholder="Text input" name="size" id="size">
        <span class="icon is-small is-left">
        <i class="fas fa-user"></i>
        </span>
        <span class="icon is-small is-right">
        <i class="fas fa-check"></i>
        </span>
    </div>
    </div>

 <div class="field">
  <label for="brand" class="label">Brand</label>
  <div class="control">
    <div class="select">
      <select name="brand" id="brand" required>
        <option>None</option>
        <option>H&M</option>
        <option>UNIQLO</option>
        <option>ZARA</option>
      </select>
    </div>
  </div>
</div>

    <div class="field">
    <label for="price" class="label">Price</label>
    <div class="control has-icons-left has-icons-right">
        <input class="input is-success" type="text" placeholder="$" name="price" id="price" required>
        <span class="icon is-small is-left">
        <i class="fas fa-user"></i>
        </span>
        <span class="icon is-small is-right">
        <i class="fas fa-check"></i>
        </span>
    </div>
    </div>

    <div class="field">
  <label for="category" class="label">Category</label>
  <div class="control">
    <div class="select">
      <select name="category" id="category">
        <option>Men/Hoodie</option>
        <option>Women/Hoodie</option>
        <option>Men/Flannel</option>
        <option>Women/Shirts</option>
        <option>Men/T-shirts</option>
        <option>Women/Dress</option>
        <option>Men/Cardigans</option>
      </select>
    </div>
  </div>
</div>

    <div class="field is-grouped">
    <div class="control">
        <button class="button is-link" type="submit" name="tambah">Submit</button>
    </div>
    <div class="control">
        <button class="button is-link is-light" type="cancel" name="cancel"><a href="../index.php">Cancel</a></button>
    </div>
    </div>
    </form>
    </div>
   
</body>
</html>