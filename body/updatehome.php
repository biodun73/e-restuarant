<?php
 $pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student');
//select from pageupdate
 $sta = filter_input(INPUT_POST,'code1');
 $select = $pdo->query("SELECT * FROM pageupdate  ");
 foreach ($select as $row) {
     echo '<div class="details">';
     echo "<img src=" . $row['imag'] . " style=' align:left ; width:350px;height:200px;'>" . "<br>";
     echo '<p>' .  $row['title'] . '</p>';
     echo '<p>' . nl2br( $row['discrip']) . '</p>';
     echo '<p>' . $row['dat'] . '</p>';
	echo '</div>';
   }
  ?>