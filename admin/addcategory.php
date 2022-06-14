<?php
$pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
include"../header/header.php";
?>

<img src="../images/randombanner.php" />
<main class="sidebar">

<!--left section-->
    <section class="left">
        <ul>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="categories.php">Categories</a></li>

        </ul>
    </section>
<!--right section-->
    <section class="right">

        <?php
 //insert into category 
	if (isset($_SESSION['pass']) &&$_SESSION['pass']!=null){


	if (isset($_POST['submit'])) {

		$stmt = $pdo->prepare('INSERT INTO category (name) VALUES (:name)');

		$criteria = [
			'name' => $_POST['name']
		];

		$stmt->execute($criteria);
		echo 'Category added';
	}
	else {
		?>

<!--create form-->
        <h2>Add Category</h2>
        <form action="" method="POST">
            <label>Name</label>
            <input type="text" name="name" />
            <input type="submit" name="submit" value="Add Category" />
        </form>


        <?php
		}



	}
	
	?>

    </section>
</main>
<?php include"../footer/footer.php";?>
</body>

</html>