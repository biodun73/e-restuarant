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
            <li><a href="../admin/logout.php">Log out</a></li>

        </ul>
    </section>

    <section class="right">

        <?php

if (isset($_SESSION['pass']) &&$_SESSION['pass']!=null) {
		?>


        <h2>Categories</h2>

        <a class="new" href="addcategory.php">Add new category</a>

        <?php
		//select from category
			echo '<table>';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Name</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';
//select data from category
			$categories = $pdo->query('SELECT * FROM category');
			foreach ($categories as $category) {
				echo '<tr>';
				echo '<td>' . $category['name'] . '</td>';
				echo '<td><a style="float: right" href="editcategory.php?id=' . $category['id'] . '">Edit</a></td>';
				echo '<td><form method="post" action="deletecategory.php">
				<input type="hidden" name="catid" value="' . $category['id'] . '" />
				<input type="submit" name="submit" value="Delete" />
				</form></td>';
				echo '</tr>';
			}

			echo '</thead>';
			echo '</table>';

		}
	?>
    </section>
</main>
<?php include"../footer/footer.php";?>
</body>

</html>