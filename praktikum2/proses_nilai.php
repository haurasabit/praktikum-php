<?php 
$_name = $_GET['name'];
$_matkul = $_GET['matkul'];
$_uts = $_GET['uts'];
$_uas = $_GET['uas'];
$_task = $_GET['task'];

$_total_score = ($_task + $_uts + $_uas) / 3;

if ($_total_score > 75){
    $_keterangan = "LULUS";
}
else {
    $_keterangan = "TIDAK LULUS";
}








?>