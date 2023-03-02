<?php 
ob_start();

$_customer = isset($_POST['customer']) ? $_POST['customer'] : '';
$_produk = isset($_POST['produk']) ? $_POST['produk'] : '';
$_jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';

if (isset($_POST['submit'])) {
    $price = $_POST['produk'];
  }
  

  if (isset($_produk) && $_produk == 'TV') {
    $_harga = 4200000 * intval($_jumlah);
    echo $_harga;
} elseif (isset($_produk) && $_produk == 'Kulkas') {
    $_harga = 3100000 * intval($_jumlah);
    echo $_harga;
} else {
    $_harga = 3800000 * intval($_jumlah);
    echo $_harga;
}


ob_clean();
?>