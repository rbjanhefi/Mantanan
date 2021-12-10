<?php

$s_name="localhost";
$u_name="root";

$db_password="";

$db_name="mantanan_db";

$conn = mysqli_connect($s_name, $u_name, $db_password, $db_name);

if(!$conn){
    echo "Connection failed!";
}

?>