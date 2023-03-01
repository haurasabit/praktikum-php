<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h4>Sistem Penilaian</h4>
    <div class="container">

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2>
				Belanja Online
			</h2><br>
			<div class="row">
				<div class="col-md-8">
                <form action="form_belanja.php" method="POST">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                     </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="tv" type="radio" class="custom-control-input" value="TV"> 
                         <label for="tv" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                           <input name="produk" id="kulkas" type="radio" class="custom-control-input" value="Kulkas"> 
                            <label for="kulkas" class="custom-control-label">Kulkas</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                           <input name="produk" id="mesincuci" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                            <label for="mesincuci" class="custom-control-label">Mesin Cuci</label>
                          </div>
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                      <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                       </div>
                     </div> 
                     <div class="form-group row">
                       <div class="offset-4 col-8">
                         <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                       </div>
                    </div>
            </form>

				</div>
				<div class="col-md-4">
					<div class="list-group">
						 <a href="#" class="list-group-item active font-weight-bold">DAFTAR HARGA</a>
						<div class="list-group-item">
							TV : Rp. 4.200.000 
						</div>
						

                        <div class="list-group-item">
							KULKAS : Rp. 3.100.000
						</div>

                        <div class="list-group-item">
							MESIN CUCI : Rp. 3.800.000
						</div>

                        <div class="list-group-item active font-weight-bold">
							HARGA DAPAT BERUBAH SETIAP SAAT
						</div>
					</div>
				</div>
			</div>
		</div>
        

    
	</div>
    </div>
    
    <br><hr><br>

    <div class="container-table-hasil">
                <table class="table table-bordered">
                    <tr class="table-primary">
                        <th>Nama</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                    </tr>
                    <?php require_once "proses_belanja.php" ?>
                    <tr>
                        <td><?= $_customer; ?></td>
                        <td><?= $_produk; ?></td>
                        <td><?= $_jumlah; ?></td>
                        
                    </tr>
                </table>
            </div>

    </div>

    <br><br><br><br><br>
    <hr>

    <div class="footer text-secondary text-center">
        <footer>
            &copy Haura Tsabitah
        </footer>
    </div>

</body>
</html>