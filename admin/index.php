<?php
$pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
include"../header/header.php";
?>

<img src="../images/randombanner.php" />
<main class="sidebar">



    <?php
	if (isset($_POST['submit'])) {
		if ($_SESSION['pass']!=null) {
			$_SESSION['pass'] = true;
		}
	}


	if (isset($_SESSION['pass']) &&$_SESSION['pass']!=null) {
	?>

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
        <h2>You are now logged in</h2>
    </section>
    <?php
	}

	else {
		?>
    <h2>Log in</h2>

    <form action="../admin/adminloginClass.php" method="post" style="padding: 40px;margin-left:150px">

        <label>Enter Password</label>
        <input type="password" name="password" />

        <input type="submit" name="submit" value="Log In" />
    </form>
    <?php
	}
	?>
</main>
<?php include"../footer/footer.php";?>
</body>

</html>






