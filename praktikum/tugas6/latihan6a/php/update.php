<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
    // koneksi ke DBMS
    require 'functions.php' ;

    // ambil data di URL
    $id = $_GET["id"] ;

    // query data
    $baju = query("SELECT * FROM baju WHERE id = $id") [0];

    // // cek tombol submit sudah ditekan atau belum
    if ( isset($_POST['update']) ) {
        // cek data apakah berhasil diubah atau tidak
          if ( update($_POST) > 0 ) {
              echo "<script>
                      alert('Data Berhasil Diubah!') ;
                      document.location.href = '../php/admin.php' ;
                    </script>
                   " ;
          } else {
            echo "<script>
                    alert('Data Gagal Diubah!') ;
                    document.location.href = '../php/admin.php' ;
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

    <title>Update Data</title>
</head>
<body>
    
    <h1 class="text-center pt-5">Update Data</h1>

    <div class="container pt-6">
    <form action="" method="post">
    <input type="hidden" name="id" value= "<?= $baju["id"] ; ?>">
    <div class="field">
    <label for="img" class="label">Image</label>
    <div class="control has-icons-left has-icons-right">
        <input class="input is-warning" type="text" placeholder="Text input" name="img" id="img" value="<?= $baju["img"]?>">
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
        <input class="input" type="text" placeholder="Text input" name="name" id="name" required value="<?= $baju["name"]?>">
    </div>
    </div>

    <div class="field">
    <label for="size" class="label">Size</label>
    <div class="control has-icons-left has-icons-right">
        <input class="input is-success" type="text" placeholder="Text input" name="size" id="size" value="<?= $baju["size"]?>">
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
        <input class="input is-success" type="text" placeholder="$" name="price" id="price" required value="<?= $baju["price"]?>">
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
      </select>
    </div>
  </div>
</div>

    <div class="field is-grouped">
    <div class="control">
        <button class="button is-link" type="submit" name="update">Submit</button>
    </div>
    <div class="control">
        <button class="button is-link is-light" type="cancel" name="cancel"><a href="../php/admin.php">Cancel</a></button>
    </div>
    </div>
    </form>
    </div>
   
</body>
</html>