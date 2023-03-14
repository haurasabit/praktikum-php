<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";
?>

<!-- MAIN CONTENT -->
<div class="container">
        <h2>Form Input Nilai Mahasiswa</h2><br><br>

        <form action="../../praktikum2/form_hasil.php" method="GET">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Name</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="fill with your name" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required="required">
        <option value="Pemrograman Web">Pemrograman Web</option>
        <option value="Basis Data">Basis Data</option>
        <option value="UI/UX">UI/UX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">UTS score</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="fill your score" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">UAS score</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="fill your score" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="task" class="col-4 col-form-label">Task score</label> 
    <div class="col-8">
      <input id="task" name="task" placeholder="fill your score" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

    </div>

<?php
require_once "layouts/footer.php";
?>