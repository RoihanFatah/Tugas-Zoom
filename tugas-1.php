
<?php 

// Variabel

$tgl =  $_GET ['tanggal'];
$bln =  $_GET ['bulan'] ;
$hasil = "SALAH";


// kondisi untuk mencari zodiak

if (($bln == 12 && $tgl >=22) || ($bln == 1 && $tgl <=19)) {
    $hasil = "CAPRICORN";
} elseif (($bln == 1 && $tgl >=20) || ($bln == 2 && $tgl <=18)) {
    $hasil = "AQUARIUS";
} elseif (($bln == 2 && $tgl >=19) || ($bln == 3 && $tgl <=20)) {
    $hasil = "PISCES";
} elseif (($bln == 3 && $tgl >=21) || ($bln == 4 && $tgl <=19)) {
    $hasil = "ARIES";
} elseif (($bln == 4 && $tgl >=20) || ($bln == 5 && $tgl <=20)) {
    $hasil = "TAURUS";
} elseif (($bln == 5 && $tgl >=21) || ($bln == 6 && $tgl <=20)) {
    $hasil = "GEMINI";
} elseif (($bln == 6 && $tgl >=21) || ($bln == 7 && $tgl <=22)) {
    $hasil = "CANCER";
} elseif (($bln == 7 && $tgl >=23) || ($bln == 8 && $tgl <=22)) {
    $hasil = "LEO";
} elseif (($bln == 8 && $tgl >=23) || ($bln == 9 && $tgl <=22)) {
    $hasil = "VIRGO";
} elseif (($bln == 9 && $tgl >=23) || ($bln == 10 && $tgl <=22)) {
    $hasil = "LIBRA";
} elseif (($bln == 10 && $tgl >=23) || ($bln == 11 && $tgl <=21)) {
    $hasil = "SCORPIO";
}elseif (($bln == 11 && $tgl >=22) || ($bln == 12 && $tgl <=21)) {
    $hasil = "SAGITARIUS";
}

// kondisi untuk peringatan kesalahan input

if (($tgl >=32 && $bln >=13)) {
    $hasil = "INPUT SALAH";
} elseif ($tgl >=32) {
    $hasil = "INPUT TANGGAL SALAH";
} elseif ($bln >=13) {
    $hasil = "INPUT BULAN SALAH";
}


?>

<!-- bagian HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiac Finder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <!-- navbar section -->
    <section>
    <nav class="navbar navbar-dark bg-dark text-light mb-5">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Zodiac Finder</span>
  </div>
</nav>
    </section>
    <!-- end of navbar section -->

    <!-- form section -->
    <h3 class="text-center mb-3">Masukkan Tanggal dan Bulan Lahir Anda</h3>
    
<div class="container bg-dark text-light p-3 mt-6 rounded-3">
<form method="get">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
    <input type="text" class="form-control" name="tanggal" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Bulan</label>
    <input type="text" class="form-control" name="bulan" id="exampleInputPassword1" autocomplete="off">
  </div>
  
  <button type="submit" class="btn btn-primary">Cari</button>
</form>
</div>




<!-- end of form section -->

<!-- hasil section -->
<div class="container text-center mt-5">
    <p>Zodiak anda adalah : </p>
    <h1 class="bg-dark text-light p-2 ps-5 pe-5 d-inline rounded-pill"><?php echo $hasil;?></h1>
</div>
<!-- end of hasil section -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>





