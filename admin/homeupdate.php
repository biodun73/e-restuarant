<?php
session_start();
//create class to update home page
class updatpage{

    function updat(){
          $pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
       
         $filename = $_FILES["afile"]["name"];
         $tempname = $_FILES["afile"]["tmp_name"];    
         $images = "../pics/".$filename;
         $title=filter_input(INPUT_POST,"title");
         $description =filter_input(INPUT_POST,"desc");
         $dat=filter_input(INPUT_POST,"dat");
    
  if(is_uploaded_file($tempname)){
         if (move_uploaded_file($tempname, $images))  {
            echo"Image uploaded successfully";
         }else{
            echo "Failed to upload image";
       }
    }  
    
    $iput = "INSERT INTO pageupdate (title, discrip, dat,imag) VALUES ('$title','$description',' $dat','$images')";   
    $ins = $pdo->prepare($iput);
    $ins->execute();
  header("Location:../admin/updatehomeform.php");
    }

}
$dish = new updatpage();
$dish->updat();