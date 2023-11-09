<?php 
require 'function.php';

$plt = $_GET ["noProduk"];

$skincare = read("SELECT * FROM skincare WHERE noProduk = '$plt'")[0];


if (isset( $_POST ["submit"])) {

    if ( ubah ($_POST) > 0 ) {
        echo "
        <script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = '../LATIHAN 1/index.php';
        </script>
        ";
    }else {
        echo mysqli_error($conn);
        // echo "
        // <script>
        //     alert('DATA GAGAL DIUBAH');
        //     document.location.href = '../LATIHAN 1/index.php';
        // </script>
        // ";
        
    }

   
    
 }
    


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
        <a class="navbar-brand" href="../LATIHAN 1/index.php">
        
        AMORILESBEAUTE
        </a>
    </div>
    <br><br>
    </nav>
    <br><br><br><br>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="noProduk" class="form-label">NOMOR PRODUK :</label>
                <input type="text" class="form-control" id="noProduk" name ="noProduk" required disabled value="<?= $skincare ["noProduk"];?>" >
            </div>
            <div class="mb-3">
                <label for="namaProduk" class="form-label">NAMA PRODUK :</label>
                <input type="text" class="form-control" id="namaProduk" name ="namaProduk" required value="<?= $skincare ["namaProduk"];?>">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">KETERANGAN :</label>
                <input type="text" class="form-control" id="keterangan" name ="keterangan" required value="<?= $skincare ["keterangan"];?>">
            </div>
            <div class="mb-3">
                <label for="ukuran" class="form-label">UKURAN :</label>
                <input type="text" class="form-control" id="ukuran" name ="ukuran" required value="<?= $skincare ["ukuran"];?>">
            </div>
            <div class="mb-3">
                <label for="hargaProduk" class="form-label">HARGA PRODUK  :</label>
                <input type="text" class="form-control" id="hargaProduk" name ="hargaProduk" required value="<?= $skincare ["hargaProduk"];?>">
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-primary btn-lg       ">UBAH</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>