<?php include"../header/header.php"; ?>
<img src="../images/randombanner.php" />

<main class="sidebar">

    <section class="left">
        <?php 
			include"menuListClass.php";
	?>
    </section>

    <section class="right">

        <h1>Starters</h1>

        <ul class="listing">

            <?php
  // session_start();
 $pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student');

 ////////////////////////////////////////////////////////////////////////
 $select = $pdo->query("SELECT * FROM menu WHERE categoryId =1");
 foreach ($select as $record) {
     echo '<li>';
     echo '<div class="details">';
     echo "<img src=" . $record['imag'] . " style=' align:leftwidth:150px;height:150px;'>" ; 
     echo '<h3>£' .  $record['price'] . '</h3>';
     echo '<h2>' .  $record['nam'] . '</h2>';
     echo '<p>' . nl2br( $record['descript']) . '</p>';
	 echo"<a href='writeReviewstarter.php'>Review</a>";
	 include"../body/reviewStarter.php";
	echo '</div>';
	echo '</li>'; 
   }
  ?>

        </ul>

    </section>
</main>
<?php include"../footer/footer.php";?>
</body>

</html>