<?php
class review{
    //insert data into desert
    function addreview(){
        $pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
       $siz= filter_input(INPUT_POST,'rate');
       $nam = filter_input(INPUT_POST,'nam');
       $tex = filter_input(INPUT_POST,'tex');
       $dat = filter_input(INPUT_POST,'dat');
       $cate = filter_input(INPUT_POST,'categoryId');

       $iput = "INSERT INTO desert(rate,nam,tex,dat,categ) VALUES('$siz','$nam','$tex','$dat','$cate')";     
       $ins = $pdo->prepare($iput);
       $ins->execute();
        header("Location:deserts.php");
    
    }
}
$bo = new review();
$bo->addreview();
?>