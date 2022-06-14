<?php
  session_start();
 $pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student');

//select from menu
 $sta = filter_input(INPUT_POST,'code1');
 $select = $pdo->query("SELECT * FROM menu WHERE categoryId = 1");
 foreach ($select as $record) {
     echo '<li>';
     echo '<div class="details">';
     echo '<h3>£' .  $record['price'] . '</h3>';
     echo '<h2>' .  $record['name'] . '</h2>';
     echo '<p>' . nl2br( $record['description']) . '</p>';
	 echo"<a href='writeReviewstart.php'>Review</a>";
	 include"../body/reviewStarter.php";
	echo '</div>';
	echo '</li>'; 
   }
  ?>