<?php
session_start();
//create function for login
    function login(){
        $passw = filter_input(INPUT_POST,'password');
          $pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
          $select = $pdo->query("SELECT pass FROM login WHERE pass='$passw' ");
          if($select!=null){
              foreach ($select as $row ) {
                  $_SESSION['pass']=$row['pass'];    
              }
              header("Location:../admin/index.php");
          }
          else{
              echo "Erroe";
          }
    }
    login();


?>