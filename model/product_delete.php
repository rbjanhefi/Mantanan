<?php
include 'db_connect.php';

$product_id=$_GET['id'];
echo $product_id;

$query = "delete from products where product_id ='$product_id'";
$sql = mysqli_query($conn,$query);

if($sql){
    header("location:../view/page/product.php?success=product delete");
}else{
    header("location:../view/page/product.php?error=error!");
}


?>