<?php
//insert data into booking table on database
class booking{
    function addbooking(){
        $pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
       $first = filter_input(INPUT_POST,'first');
       $last = filter_input(INPUT_POST,'last');
       $address = filter_input(INPUT_POST,'address');
       $guest = filter_input(INPUT_POST,'numb');
       $dat= filter_input(INPUT_POST,'dat');

       $iput = "INSERT INTO booking(firstname,lastname,addres,guest,dat) VALUES('$first','$last','$address','$guest','$dat')";     
       $ins = $pdo->prepare($iput);
       $ins->execute();
    
        header("Location:../body/booking.php");
    }
}
$bo = new booking();
$bo->addbooking();
?>