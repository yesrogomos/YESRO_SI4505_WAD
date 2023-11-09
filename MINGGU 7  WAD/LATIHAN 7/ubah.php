<?php
require 'function.php';

$plt = $_GET["noProduk"];

// Assuming $conn is your database connection
$skincare = read("SELECT * FROM skincare WHERE noProduk = '$plt'")[0];

if (isset($_POST["submit"])) {
    // Your update logic here
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = '../LATIHAN 1/index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('DATA BERHASIL DIUBAH');
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
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="noProduk" class="form-label">KODE PRODUK :</label>
                <input type="text" class="form-control" id="noProduk" name="noProduk" value="<?= $skincare['noProduk'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="namaProduk" class="form-label">MODEL PRODUK :</label>
                <input type="text" class="form-control" id="namaProduk" name="namaProduk" value="<?= $skincare['namaProduk'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">MEREK PRODUK :</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $skincare['keterangan'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="ukuran" class="form-label">HARGA :</label>
                <input type="text" class="form-control" id="ukuran" name="ukuran" value="<?= $skincare['ukuran'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="hargaProduk" class="form-label">HARGA :</label>
                <input type="text" class="form-control" id="hargaProduk" name="hargaProduk" value="<?= $skincare['hargaProduk'] ?>" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">SUBMIT</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>