<?php
$pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
include"../header/header.php";
?>

<img src="../images/randombanner.php" />
<main class="sidebar">
    <section class="left">
        <ul>
            <li><a href="../admin/menu.php">Menu</a></li>
            <li><a href="../admin/categories.php">Categories</a></li>
            <li><a href="../admin/hide.php">Dish</a></li>
            <li><a href="../admin/bookingData.php">Booking</a></li>
            <li><a href="../admin/updatehomeform.php">Update</a></li>
            <li><a href="../admin/logout.php">Log out</a></li>

        </ul>
    </section>
    <section class="right">
        <h1>BOOKING</h1>

        <ul class="listing">
            <?php
    //get data from booking table on database
    
$pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student');
$select = $pdo->query("SELECT * FROM booking ");
foreach ($select as $record) {
  echo '<li>';
  echo '<div class="details">';
  echo '<P>Firstname  :'. $record['firstname'] . '</P>';
  echo '<P>Lastname  :' .  $record['lastname'] . '</P>';
  echo '<p>Address  :' . nl2br( $record['addres']) . '</p>';
  echo '<p>Number of Guest  :' . nl2br( $record['guest']) . '</p>';
  echo '<p>Time and Date  :' . nl2br( $record['dat']) . '</p>';
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