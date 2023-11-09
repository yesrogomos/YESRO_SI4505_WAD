<?php
require 'function.php';

$skincare = query("SELECT * FROM skincare");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMORILESBEAUTE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar" style="background-color: #ffd6e9;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        
        AMORILESBEAUTE
        </a>
    </div>
    </nav>
    <div class="container text-center pt-3">
        <h2>DATA PRODUK AMORILESBEAUTE</h2>
    </div>
    <div class="container pt-4">
        <table class="table table-striped table-hover >
            <tr class="">
                <th>NO</th>
                <th>NO PRODUK</th>
                <th>NAMA PRODUK</th>
                <th>KETERANGAN</th>
                <th>VOLUME (ML) </th>
                <th>HARGA (RP)</th>
                <th></th>
            </tr>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($skincare as $row) : ?>
            </tr>
            <tr>
                <td class=""><?= $i; ?></td>
                <td><?= $row ["noProduk"];?></td>
                <td><?= $row ["namaProduk"];?></td>
                <td><?= $row ["keterangan"];?></td>
                <td><?= $row ["ukuran"];?></td>
                <td><?= $row ["hargaProduk"];?></td>
                <td><a class="btn btn-primary btn-sm" href="../LATIHAN 7/ubah.php?noProduk=<?= $row ["noProduk"];?>" role="button">UBAH</a> <a class="btn btn-primary btn-sm" href="../LATIHAN 5/hapuslagi.php?noProduk=<?= $row ["noProduk"];?>" role="button" onclick="return confirm('APAKAH ANDA YAKIN?')">HAPUS</a></td>
               

            </tr>
            <?php $i++; ?>
            <?php endforeach;?>
        </table>
    </div>
    <br> <br> <br>
    <div class="container text-center">
        <a button type="button" class="btn btn-outline-danger" href="../LATIHAN 3/nambahlagi.php" role="button">TAMBAH DATA</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>