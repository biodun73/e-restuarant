<?php 
$pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
include"../header/header.php";
?>
<img src="/images/randombanner.php" />
<main class="sidebar">


    <section class="left">
        <ul>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="categories.php">Categories</a></li>

        </ul>
    </section>

    <section class="right">

        <?php


	if (isset($_POST['submit'])) {
		$nam = $_POST['name'];
		$descript = $_POST['description'];
		$price = $_POST['price'];
		$categoryId = $_POST['categoryId'];
		$id = $_POST['id'];

		$stmt = $pdo->prepare('UPDATE menu
								SET name = $nam,
								    description = $descript,
								    price = $price,
								    categoryId = $category,
								   WHERE id = $id
						');


		$stmt->execute($criteria);


		echo 'Dish saved';
	}
	else {
		if (isset($_SESSION['pass']) &&$_SESSION['pass']!=null)  {

			$stmt = $pdo->prepare('SELECT * FROM menu WHERE id = :id');

			$stmt->execute($_GET);

			$record = $stmt->fetch();
		?>

        <h2>Edit Dish</h2>

        <form action="editdish.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $record['name']; ?>" />

            <label>Description</label>
            <textarea name="description"><?php echo $record['description']; ?></textarea>



            <label>Price</label>
            <input type="text" name="price" value="<?php echo $record['price']; ?>" />

            <label>Category</label>

            <select name="categoryId">
                <?php
					$stmt = $pdo->prepare('SELECT * FROM category');
					$stmt->execute();

					foreach ($stmt as $category) {
						if ($record['categoryId'] == $category['id']) {
							echo '<option selected="selected" value="' . $row['id'] . '">' . $category['name'] . '</option>';
						}
						else {
							echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
						}

					}

				?>

            </select>

            <input type="submit" name="submit" value="Save" />

        </form>

        <?php
		}

		else {
			?>
        <h2>Log in</h2>

        <form action="index.php" method="post">

            <label>Password</label>
            <input type="password" name="password" />

            <input type="submit" name="submit" value="Log In" />
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