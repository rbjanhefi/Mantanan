<?php

    session_start();
    //KONEKSI KE DATABASE
    include 'db_connect.php';

    if(isset($_POST['update'])){
        $pid = $_POST['product_id'];
        $pname = $_POST['product_name'];
        $desc = $_POST['product_desc'];
        $category = $_POST['catergory'];
        $brand = $_POST['product_brand'];
        $ori = $_POST['product_origin'];
        $price = $_POST['product_price'];
        $stock = $_POST['stock'];

        $query = "UPDATE products SET product_name = '$pname',product_desc = '$desc',category = '$category',product_brand = '$brand', product_origin='$ori', product_price = '$price' ,stock = '$stock' WHERE product_id = '$pid'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location:../view/page/product.php?success= Data updated succesfully");
            exit();
           
        }
        else{
            header("location:../view/page/product.php?error= Data failed to update");
            exit();
        
        }
        exit();
        
    }    
?>