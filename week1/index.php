<?php 


// ini sebuah komentar
/* ini untuk komentar yg lebih dari se baris */

//echo utk mencetak output
// echo "Hello World <br>" ;

// // cara ke-2 utk mencetak output (tp jarang dipake)
// print_r("Nama saya Haura <br>");

// // cara ke-3 utk cetak output, buat nampilin tipe data nya juga, biasany dipake utk debugging/eror
// var_dump("kuliah di STT Nurul Fikri <br>"); 


// //MEMBUAT VARIABEL USER 
// $nama = "Haura Tsabitah";
// $umur = 18;
// $berat = 50.0;
// $mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya adalah $umur <br>";
// echo "Berat badan $berat <br>";


// //MEMBUAT VARIABEL SISTEM
// echo "Dokumen root " . $_SERVER["DOCUMENT_ROOT"];
// echo "Nama File " . $_SERVER["PHP_SELF"];


//MEMBUAT VARIABEL KONSTANTA (yaitu "define" tdk bisa diubah2, klo javascript pake const)
// define("PHI", 3.14);
// $jari = 8;
// $luas = PHI *$jari *$jari;
// $keliling = PHI *$jari;

// echo "Luas lingkaran dengan jari-jari $jari cm = $luas cm <br>";
// echo "Keliling lingkaran adalah $keliling";


//MEMBUAT ARRAY
$programs = ["php", "JavaScript", "HTML", "CSS"];
//klo mo cetak array harus pake [], 0 krn ia mau menampilkan index ke 0
// echo $programs[0];


// echo count($programs);
// $programs[] = "Mysql";
// echo count($programs);


// //untuk menghapus index ke-0
// unset ($programs[0]);
// echo "<br>" . $programs[0]; // ini hasilnya undefined/eror krn index 0 udh di apus oleh unset diatas



echo "<ol>";
foreach($programs as $program){
    echo "<li> $program </li>";
}
echo "</ol>";



?>