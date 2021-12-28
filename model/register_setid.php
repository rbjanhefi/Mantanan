<?php 

//KONEKSI DATABASE
include 'db_connect.php';

//MENAMPILKAN MAXID
$query = mysqli_query($conn,"SELECT max(user_id) as maxID FROM users");
$maxid = mysqli_fetch_array($query);
$userid = $maxid['maxID'];

//MENETUKAN ID
$i = (int) substr($userid,5,5);
$i++;

$kode = 'USR';
$userid =  $kode.sprintf('%05s',$i);

?>