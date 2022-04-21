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

    <h2 class="text-center mt-4">Ujian Praktek</h2>
    <div class="container card mt-4">
        <form class="" action="insert.php" method="post" autocomplete="off">

            <!-- textarea -->
            <div class="mb-3 mt-2 form-group">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="nama" required value="">
            </div>
            
            <!-- select -->
            <div class="form-group">
                <label for="">Jurusan</label>
                <select class="form-group form-select" name="jurusan" required>
                    <option value="" selected hidden>Pilih Jurusan</option>
                    <option value="sija">SIJA</option>
                    <option value="toi">TOI</option>
                    <option value="pertambangan">PERTAMBANGAN</option>
                </select>
            </div>  
    
            <!-- radio -->
            <div class="form-group mt-3">
                <label for="" class="form-label">Jenis kelamin</label>
                    <div class="form-check ms-2">
                        <input type="radio" name="gender" value="laki-laki" required> Laki-Laki
                    </div>
                    <div class="form-check ms-2">
                        <input type="radio" name="gender" value="perempuan"> Perempuan
                    </div>
            </div>
    
            <!-- checkbox -->
            <div class="form-group mt-3">
                <label for="">Ekstrakurikuler</label>
                <div class="form-check">
                    <input type="checkbox" name="ekstrakurikulers[]" value="Voli"> Voli
                </div>
                <div class="form-check">
                    <input type="checkbox" name="ekstrakurikulers[]" value="Basket"> Basket
                </div>
                <div class="form-check">
                    <input type="checkbox" name="ekstrakurikulers[]" value="Sepak Bola"> Sepak Bola
                </div>
                <div class="form-check">
                    <input type="checkbox" name="ekstrakurikulers[]" value="Tari"> Tari
                </div>
                <div class="form-check">
                    <input type="checkbox" name="ekstrakurikulers[]" value="Musik"> Musik
                </div>
            </div>

            <!-- textarea -->
            <div class="form-group mt-3">
                <label for="" class="form-label">Alasan Masuk di Stembayo</label><br>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alasan"></textarea>
            </div>

            <div class="btn float-end">
                <!-- reset -->
                <input type="reset" class="btn btn-warning btn-block">
        
                <!-- submit -->
                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>