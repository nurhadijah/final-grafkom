<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Buku</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-light bg-light">
         <div class="container-fluid">
            <a class="navbar-brand">Data Buku</a>
              
        </div>
        </nav>

        <figure class="text-center mt-5">
        <blockquote class="blockquote">
            <p>Data Buku yang Tersedia</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            <cite title="Source Title">Kelolah Data Buku</cite>
        </figcaption>
        </figure>

        <form action="proses.php" method="post">
        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" name="judul">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="harga" name="harga">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="pengarang" name="pengarang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
        </div>
        <div class="mb-3 row">
            <?php
            if (isset($_GET['edit'])) {
                echo "<button type='submit' class='btn btn-primary' name='btnProses' 
                value='edit'>Simpan Perubahan</button>";
            } else {
                echo "<button type='submit' class='btn btn-primary'name='btnProses' 
                value='tambah'>Tambah Data</button>";
            }
            ?>
        </div>
        </form>

        
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>