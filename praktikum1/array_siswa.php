<?php
$mhs1 = ['id' => 1, 'NIM' => 01101212, 'UTS' => 90, 'UAS' => 95, 'TUGAS' => 90];
$mhs2 = ['id' => 2, 'NIM' => 01101313, 'UTS' => 85, 'UAS' => 90, 'TUGAS' => 92];
$mhs3 = ['id' => 3, 'NIM' => 01101414, 'UTS' => 95, 'UAS' => 96, 'TUGAS' => 95];

$ar_nilai = [$mhs1, $mhs2, $mhs3];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
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
</body>
</html>