<?php require_once "proses_registrasi.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Registrasi</title>
</head>
<body style="margin: 10vh;">
    <div class="container">
        <h2>Form Input IT Club GDSC</h2><br>

            <form method="POST">
            <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
            </div>
            </div>
            <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
            </div>
            </div>
            <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
                <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control" required="required">
            </div>
            </div>
            <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Pria"> 
                <label for="gender_0" class="custom-control-label">Pria</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Wanita"> 
                <label for="gender_1" class="custom-control-label">Wanita</label>
                </div>
            </div>
            </div>
            <div class="form-group row">
            <label for="domisili" class="col-4 col-form-label">Domisili</label> 
            <div class="col-8">
                <select id="domisili" name="domisili" class="custom-select" required="required">
                
                <?php foreach ($_domisili as $dom) { ?>
                    <option value="<?= $dom; ?>"> <?= $dom; ?></option>
                    
                <?php } ?>
                
                
                </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
            <div class="col-8">
                <select id="prodi" name="prodi" class="custom-select" required="required">
                <?php
                foreach($_prodi as $key => $value){ ?>
                <option value="<?= $key; ?>"> <?= $value; ?></option>
                <?php } ?>
                </select>
            </div>
            </div>
            <div class="form-group row">
            <label class="col-4">Skill Programming</label> 
                <div class="col-8">

                    <?php foreach ($_skillS as $key => $value) { ?>

                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="<?= $key; ?>" type="checkbox" class="custom-control-input" value="<?= $key; ?>" > 
                            <label for="<?= $key; ?>" class="custom-control-label"> <?= $key; ?> </label>
                        </div>

                    <?php } ?>

                </div>
            </div> 
            <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
            </form>

        <hr>
        <table class="table table-bordered">
            <tr class="table-primary text-uppercase">
                <th>nim</th>
                <th>nama</th>
                <th>email</th>
                <th>jenis kelamin</th>
                <th>domisili</th>
                <th>Program studi</th>
                <th>skill</th>
            </tr>
            <!-- ini buat manggil data nya -->
            <?php 
                if(isset($_POST['submit'])){
                    $_nim = $_POST['nim'];
                    $_nama = $_POST['nama'];
                    $_email = $_POST['email'];
                    $_gender = $_POST['gender'];
                    $_domisili = $_POST['domisili'];
                    $_prodi = $_POST['prodi'];
                    $_skillS = $_POST['skill'];

            ?>
            <!-- ini buat cetak data nya -->
            <tr>
                <th><?= $_nim; ?></th>
                <th><?= $_nama; ?></th>
                <th><?= $_email; ?></th>
                <th><?= $_gender; ?></th>
                <th><?= $_domisili; ?></th>
                <th><?= $_prodi; ?></th>
                <th><?php foreach ($_skillS as $skill){echo $skill . ", ";} ; ?></th>

            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>