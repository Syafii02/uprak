<?php
$nama = "Syafii";
$jurusan = "SIJA";
$gender = "Laki-Laki";
$ekstrakurikuler = "Voli, Sepak Bola, Musik";
$alasan = "For more straightforward sizing in CSS, we switch the global box-sizing value from content-box to border-box. This ensures padding does not affect the final computed width of an element, but it can cause problems with some third-party software like Google Maps and Google Custom Search Engine.For more straightforward sizing in CSS, we switch the global box-sizing value from content-box to border-box. This ensures padding does not affect the final computed width of an element, but it can cause problems with some third-party software like Google Maps and Google Custom Search Engine.For more straightforward sizing in CSS, we switch the global box-sizing value from content-box to border-box. This ensures padding does not affect the final computed width of an element, but it can cause problems with some third-party software like Google Maps and Google Custom Search Engine.";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Uprak</title>
  </head>
  <body>

  <div class="position-absolute top-50 start-50 translate-middle">

    <div class="alert alert-success alert-dismissible fade show p-4" role="alert">
        <label class="position-absolute top-50 start-50 translate-middle"><strong>Selamat</strong> Data Berhasil Ditambahkan</label>
    </div>
    
    <div class="container card p-3">
        <div class="card mt-3 py-2 px-2">
            <label>Nama Lengkap:</label>
            <label class="mx-3"><?php echo $nama; ?></label>
        </div>
        <div class="card mt-3 py-2 px-2">
            <label>Jurusan: </label>
            <label class="mx-3"><?php echo $jurusan; ?></label>
        </div>
        <div class="card mt-3 py-2 px-2">
            <label>Jenis Kelamin:</label>
            <label class="mx-3"><?php echo $gender; ?></label>
        </div>
        <div class="card mt-3 py-2 px-2">
            <label>Ekstrakurikuler:</label>
            <label class="mx-2"><?php echo $ekstrakurikuler; ?></label>
        </div>
        <div class="card mt-3 py-2 px-2">
            <label>Alasan:</label>
            <label class="mx-3"><?php echo $alasan; ?></label>
        </div>
    </div>
    </div>
  </body>
</html>