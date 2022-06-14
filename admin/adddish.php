<?php
$pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
include"../header/header.php";
?>

<img src="../images/randombanner.php" />
<main class="sidebar">


    <section class="left">
        <ul>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="../admin/index.php">Home</a></li>

        </ul>
    </section>

    <section class="right">

        <?php

if (isset($_SESSION['pass']) &&$_SESSION['pass']!=null) {


		?>


        <h2>Add Dish</h2>
<!--create form to add dish-->
        <form action="../admin/addDishClass.php" method="POST" enctype="multipart/form-data">
            <label>Add images</label>
            <input type="file" name="afile">
            <label>Name</label>
            <input type="text" name="nam" />

            <label>Description</label>
            <textarea  name="descrip"></textarea>

            <label>Price</label>
            <input type="text" name="price" />
            <label>Code Category</label>
            <input type="text" name="code" />

            <label>Category</label>

            <select name="categoryId">
                <?php
				$stmt = $pdo->prepare('SELECT * FROM category');
					$stmt->execute();

					foreach ($stmt as $row) {
						echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
					}
 
				?>

            </select>

            <input type="submit" name="submit" value="Add" />

        </form>



        <?php
		}
	
	?>

    </section>
</main>
<?php include"../footer/footer.php";?>
</body>

</html>