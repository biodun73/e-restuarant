<?php
//select data from main
 $pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student');
 $select = $pdo->query("SELECT *FROM  main  ");
 foreach ($select as $record) {
     echo '<li>';
     echo '<div class="details">';
     echo '<p>'.str_repeat('&#9733',$record['rate']) . '</p>';
     echo '<p>' .  $record['nam'] . '</p>';
     echo '<p>' .  $record['tex'] . '</p>';
     echo '<p>' .  $record['dat'] . '</p>';
    echo '<p>' .  $record['categ'] . '</p>';
 }
     ?>