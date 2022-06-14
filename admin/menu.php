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

		
	if (isset($_SESSION['pass']) &&$_SESSION['pass']!=null){
		?>


        <h2>Menu</h2>

        <a class="new" href="adddish.php">Add new dish</a>

        <?php
			echo '<table>';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Title</th>';
			echo '<th style="width: 15%">Price</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 15%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';
//select data from menu
			$stmt = $pdo->query('SELECT * FROM menu');

			foreach ($stmt as $record) {
				echo '<tr>';
				echo '<td>' . $record['nam'] . '</td>';
				echo '<td>' . $record['price'] . '</td>';
				echo '<td><a style="float: right" href="editdish.php?id=' . $record['idmenu'] . '">Edit</a></td>';
	
				echo '<td><form method="post" action="deletedish.php">
				<input type="hidden" name="id" value="' . $record['idmenu'] . '" />
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