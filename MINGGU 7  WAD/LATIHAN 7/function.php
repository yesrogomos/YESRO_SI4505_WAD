<?php
$conn = mysqli_connect("localhost","root","","tugas_wad_yesro");
function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $no_product = $data ["noProduk"];
    $nama_product = $data ["namaProduk"];
    $ket = $data ["keterangan"];
    $ukuran = $data ["ukuran"];
    $harga = $data ["hargaProduk"];

    $query = "INSERT INTO skincare (noProduk, namaProduk, keterangan, ukuran, hargaProduk) VALUES ('$no_product','$nama_product','$ket','$ukuran','$harga')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $no_product = $data ["noProduk"];
    $nama_product = $data ["namaProduk"];
    $ket = $data ["keterangan"];
    $ukuran = $data ["ukuran"];
    $harga = $data ["hargaProduk"];

    

    $query = "UPDATE skincare SET
                -- noProduk = '$no_product',
                namaProduk = '$nama_product',
                keterangan = '$ket',
                ukuran = '$ukuran',
                hargaProduk = '$harga'
            WHERE noProduk = '$no_product'
    ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    // return mysqli_affected_rows($conn);
    return var_dump($data);
    
}

?>