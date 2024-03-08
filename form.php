<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Belanja Online</title>
</head>
<body>
    <!--<h3>Belanja Online</h3>
    <select  id="harga">
        <option value="daftar harga">Daftar Harga</option>
        <option value="tv">TV : 4.200.000</option>
        <option value="">Kulkas : 3.100.000</option>
        <option value="">Mesin Cuci : 3.800.000</option>
        <option value="">Harga Dapat Berubah Setiap Saat</option>
    </select>
    
    Boostrap Form --->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="hasil9.php">
                    <h1>Belanja Online</h1>

                    <select class="form-control" name="harga" id="harga">
                        <option value="">Daftar Harga</option>
                        <option value="">TV : 4.200.000</option>
                        <option value="">Kulkas : 3.100.000</option>
                        <option value="">Mesin Cuci : 3.800.000</option>
                        <option value="">Harga DApat Berubah Setiap Saat</option>
                    </select>
                    <hr>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS" required="required"> 
                            <label for="produk_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI" required="required"> 
                            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" class="form-control" required="required">
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
    </div>

</body>
</html>