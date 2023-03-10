<?php
$_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi"];

$_prodi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "BD" => "Bisnis Digital",

];

$_skillS = [
    "HTML" => 10,
    "CSS" => 10,
    "JavaScript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 30,

];

if(isset($_POST['submit'])){
    $_nilai = 0;

    if(isset($_POST['skill'])){
        foreach ($_POST['skill'] as $key) {
            $_nilai += $_skillS[$key];
        }
    }

    if ($_nilai == 0){
        $_keterangan = "TIDAK MEMADAI";
    }elseif($_nilai > 0 && $_nilai <= 40){
        $_keterangan = "KURANG";
    }elseif($_nilai > 40 && $_nilai <= 60){
        $_keterangan = "CUKUP";
    }elseif($_nilai > 60 && $_nilai <= 100){
        $_keterangan = "BAIK";
    }else{
        $_keterangan = "SANGAT BAIK";
    }
}

?>

