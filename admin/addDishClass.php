<?php
session_start();
//create php class that will insert data into database 
class addDish{
    function addToDish(){
          $pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
       
         $filename = $_FILES["afile"]["name"];
         $tempname = $_FILES["afile"]["tmp_name"];    
         $images = "../images/".$filename;
         $name=filter_input(INPUT_POST,"nam");
         $description =filter_input(INPUT_POST,"descrip");
         $price=filter_input(INPUT_POST,"price");
         $categoryId=filter_input(INPUT_POST,"categoryId");
         $code=filter_input(INPUT_POST,"code");
  if(is_uploaded_file( $tempname )){
         if (move_uploaded_file($tempname, $images))  {
            echo"Image uploaded successfully";
         }else{
            echo "Failed to upload image";
       }
    }
    
    $iput = "INSERT INTO menu (nam, descript, price, categoryId,imag,code)
    VALUES ('$name','$description','$price',' $categoryId ','$images','$code')"; 
    $ins = $pdo->prepare($iput);
    $ins->execute();
   header("Location:../admin/adddish.php");
 
    }
    
}
$dish = new addDish();
$dish->addToDish();