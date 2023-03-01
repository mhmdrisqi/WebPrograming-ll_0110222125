<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div>
    <h4>Sistem Penilaian</h4> <br>
    <div class="container">
        <h1>Belanja Online</h1>
    <div name="harga">
      <table class=" col-4 table text-uppercase table-bordered" align="right" >
    <tr class="bg-primary text-white"  >
        <th>Daftar harga</th>
    </tr>
    <tr>
        <td >TV : Rp. 4.200.000</td>
    </tr>
    <tr>
        <td>Kulkas : Rp. 3.100.000</td>
    </tr>
    <tr>
        <td>Mesin cuci : Rp. 3.800.000</td>
    </tr>
    <tr class="bg-primary text-white">
        <th>Harga dapat berubah setiap saat</th>
    </tr>
  </table>
  </div>
    <form action="form_hasilBelanja.php" method="$_GET">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">Tv</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesin"> 
        <label for="radio_2" class="custom-control-label">Mesin cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
    </div>
</body>
</html>