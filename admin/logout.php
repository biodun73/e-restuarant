<?php
//log out 
session_start();
session_destroy();
header("Location:../admin/index.php");
?>