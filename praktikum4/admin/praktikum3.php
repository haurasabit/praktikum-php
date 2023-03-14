<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";
require_once "../../praktikum3/proses_registrasi.php";
?>

<!-- MAIN CONTENT -->
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
        <br>
        <hr> <br><br>
        <table class="table table-bordered">
            <tr class="table-primary text-uppercase">
                <th>nim</th>
                <th>nama</th>
                <th>email</th>
                <th>jenis kelamin</th>
                <th>domisili</th>
                <th>Prodi</th>
                <th>skill</th>
                <th>Skor</th>
                <th>predikat</th>
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
                <th><?php foreach ($_skillS as $skill){echo $skill . " ";} ; ?></th>
                <th><?= $_nilai; ?></th>
                <th><?= $_keterangan; ?></th>
            </tr>
            <?php } ?>
        </table>
    </div>

<?php
require_once "layouts/footer.php";
?>