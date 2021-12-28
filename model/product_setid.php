<?php 

//KONEKSI DATABASE
include 'db_connect.php';

//MENAMPILKAN MAXID
$query = mysqli_query($conn,"SELECT max(product_id) as maxID FROM products");
$maxid = mysqli_fetch_array($query);
$productid = $maxid['maxID'];

//MENETUKAN ID
$i = (int) substr($productid,5,5);
$i++;

$kode = 'PRD';
$productid =  $kode.sprintf('%05s',$i);

echo $productid;
?>

