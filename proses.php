<?php
include 'koneksi.php';
if(isset($_POST['btnProses'])) {
    $judul=$_POST['judul'];
    $harga=$_POST['harga'];
    $pengarang=$_POST['pengarang'];
    $gambar="resep.png";

    if($_POST['btnProses']=="tambah"){
        $query="INSERT INTO buku('','$judul','$harga','$pengarang','$gambar') VALUES";
        $sql=mysqli_query($konek, $query);
        if($sql){
            header('location:index.php');
        }
    }else{
        echo "edit data";
    }
}
?>