<?php 
    require '../php/functions.php';

    $baju = cari($_GET['keyword']) ;
?>

        <table class="table table-bordered mt-5">
            <thead>
              <tr>
                <th class="text-center" scope="col">No</th>
                <th class="text-center" scope="col">Picture</th>
                <th class="text-center" scope="col">Name</th>
                <th class="text-center" scope="col">Details</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($baju as $bj) : ?>
              <tr>
                <td class="text-center pt-5"><?= $bj["id"]; ?></td>
                <td class="text-center"><img src="../assets/img/<?= $bj["img"]; ?>" width="100px" alt=""></td>
                <td class="text-center pt-5"><?= $bj["name"]; ?></td>
                <td class="text-center pt-5"><a href="../php/detail2.php?id=<?= $bj["id"]; ?>" class="btn btn-light">Details</a></td>
                <td class="text-center pt-5">
                <a href="../php/ubah.php?id=<?= $bj["id"]; ?>" class="btn btn-outline-light">Ubah</a>
                <a href="../php/hapus.php?id=<?= $bj["id"]; ?>" onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data?') ;" class="btn btn-light">Hapus</a>
                </td>              
                <?php endforeach; ?>
            </tbody>
          </table>