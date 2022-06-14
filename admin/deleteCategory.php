<?php
//delete data from category
$pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
session_start();
$id = filter_input(INPUT_POST,'catid');
if (isset($_SESSION['pass']) &&$_SESSION['pass']!=null) {
	$stmt = $pdo->prepare("DELETE FROM category WHERE id = '$id' ");
	$stmt->execute();
   echo $id;
	header('location:../admin/categories.php');
}