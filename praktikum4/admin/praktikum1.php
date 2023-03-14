<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";
require_once "../../praktikum2/Tugas/proses_belanja.php";
?>

<!-- MAIN CONTENT -->
<?php
$mhs1 = ['id' => 1, 'NIM' => 01101212, 'UTS' => 91, 'UAS' => 92, 'TUGAS' => 93];
$mhs2 = ['id' => 2, 'NIM' => 01101313, 'UTS' => 85, 'UAS' => 90, 'TUGAS' => 92];
$mhs3 = ['id' => 3, 'NIM' => 01101414, 'UTS' => 95, 'UAS' => 96, 'TUGAS' => 97];

$ar_nilai = [$mhs1, $mhs2, $mhs3];
?>

<div class="container">
    <h2>DATA MAHASISWA STT NF</h2><br>
   <table class="table table-striped">
        <tr>
            <th>Nomor</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
            <th>NILAI AKHIR</th>
        </tr>
        <?php foreach($ar_nilai as $nilai) { 
            $nilai_akhir = ($nilai['UTS'] + $nilai['UAS'] + $nilai['TUGAS']) /3;
            ?>

        <tr>
            <td> <?= $nilai['id']; ?> </td>
            <td> <?= $nilai['NIM']; ?> </td>
            <td> <?= $nilai['UTS']; ?> </td>
            <td> <?= $nilai['UAS']; ?> </td>
            <td> <?= $nilai['TUGAS']; ?> </td>
            <td> <?= $nilai_akhir; ?> </td>
        </tr>

        <?php } ?>

    </table>
   </div>


<?php
require_once "layouts/footer.php";
?>