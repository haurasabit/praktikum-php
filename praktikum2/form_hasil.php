<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <table class="table text-uppercase table-bordered">
            <tr class="table-primary">
                <th>name</th>
                <th>mata kuliah</th>
                <th>uts</th>
                <th>uas</th>
                <th>task</th>
                <th>total score</th>
                <th>status</th>
            </tr>
            <?php require_once "proses_nilai.php" ?>
            <tr>
                <td><?= $_name; ?></td>
                <td><?= $_matkul; ?></td>
                <td><?= $_uts; ?></td>
                <td><?= $_uas; ?></td>
                <td><?= $_task; ?></td>
                <td><?= $_total_score; ?></td>
                <td><?= $_keterangan; ?></td>

            </tr>
        </table>
    </div>


    
    
</body>
</html>