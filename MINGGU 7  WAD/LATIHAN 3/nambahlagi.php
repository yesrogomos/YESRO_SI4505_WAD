<?php 
require 'function.php';


if (isset( $_POST ["submit"])) {

    if ( tambah ($_POST) > 0 ) {
        echo "
        <script>
            alert('DATA BERHASIL DITAMBAHKAN');
            document.location.href = '../LATIHAN 1/index.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('DATA GAGAL DITAMBAHKAN');
            document.location.href = '../LATIHAN 1/index.php';
        </script>
        ";
    }

    
    
    
 }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERPATI CAR WASH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar" style="background-color: #ffd6e9;">
    <div class="container-fluid">
        <a class="navbar-brand" href="../LATIHAN 1/index.php">
        
        AMORILESBEAUTE
        </a>
    </div>
    </nav>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <BR><BR></BR></BR>
            <div class="mb-3">
                <label for="noProduk" class="form-label">NOMOR PRODUK :</label>
                <input type="text" class="form-control" id="noProduk" name ="noProduk" required>
            </div>
            <div class="mb-3">
                <label for="namaProduk" class="form-label">NAMA PRODUK :</label>
                <input type="text" class="form-control" id="namaProduk" name ="namaProduk" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">KETERANGAN :</label>
                <input type="text" class="form-control" id="keterangan" name ="keterangan" required>
            </div>
            <div class="mb-3">
                <label for="ukuran" class="form-label">UKURAN :</label>
                <input type="text" class="form-control" id="ukuran" name ="ukuran" required>
            </div>
            <div class="mb-3">
                <label for="hargaProduk" class="form-label">HARGA PRODUK :</label>
                <input type="text" class="form-control" id="hargaProduk" name ="hargaProduk" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-outline-primary">SUBMIT</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>