<?php
    
    session_start();
    //KONEKSI KE DATABASE
    include 'db_connect.php';
    include 'product_setid.php';
    
    if (isset($_POST['upload'])){
        
        if($_FILES['product_image']['name'] != '' ){
        
            $email = $_SESSION['email'];
            $product_name = $_POST['product_name']; 
            $product_desc = $_POST['product_desc'];
            $product_brand = $_POST['product_brand'];
            $product_origin = $_POST['product_origin'];
            $product_price = $_POST['product_price'];
            // $category = $_POST['category'];
            $stock = $_POST['stock'];

            
            //NAMA GAMBAR
            $image_name = $_FILES['product_image']['name'];

            // //UKURAN GAMBAR
            $image_size = $_FILES['product_image']['size'];

            $fileinfo = @getimagesize($_FILES["product_image"]["tmp_name"]);
            //LEBAR GAMBAR
            $width = $fileinfo[0];
            //TINGGI GAMBAR
            $height = $fileinfo[1];


            //FILE GAMBAR
            $product_image=addslashes(file_get_contents($_FILES['product_image']['tmp_name']));

            //VALIDASI DAN PROSES UPLOAD FILE
            if(empty($product_name) || empty($product_desc) || empty($product_brand) || empty($product_origin) || empty($product_price) || empty($stock)){
                header("location:../view/page/productUpload.php?error=Column cannot be empty!");
            }
            else if($image_size > 1000000){
                header("location:../view/page/productUpload.php?error=Failed, Maximum image size 1MB!");
            }
            else{
                $query = "INSERT INTO products (product_id, email , product_name , product_desc, product_brand, product_origin,stock,product_price,image,image_file) 
                                        VALUES ('$productid','$email','$product_name','$product_desc','$product_brand','$product_origin','$stock','$product_price','$image_name','$product_image')";
                $sql=mysqli_query($conn,$query);
                
                if($sql){
                    header("location:../view/page/productUpload.php?success=Success post product!");
                }else{
                    header("location:../view/page/productUpload.php?error=error!");
                }
            }
        }
        else{
            header("location:../view/page/productUpload.php?error=No file chosen.");
        }
    }    
    
?>