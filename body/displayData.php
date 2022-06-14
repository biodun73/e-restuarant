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
            <li><a href="../body/hide.php">Dish</a></li>
            <li><a href="../admin/bookingData.php">Booking</a></li>
            <li><a href="../admin/logout.php">Log out</a></li>
        </ul>
    </section>

    <section class="right">

        <h1>Display</h1>

        <ul class="listing">
            <table>
                <td>
 <form method='POST' action=''>
                <label>Select category</label>
                <select name="categoryId">
                  <option value="1">Starters</option>
                  <option value="2">Mains</option>
                  <option value="3">Deserts</option>
                  <option value="4">Specials</option>
               </select>
                <input type='submit' name='submit' value='Submit'>
            </form>
  <?php
$pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
       $up ='UPDATE menu SET nam = :name WHERE id = :id ';
	   $upd = $pdo->prepare($up);
		$stmt->execute($upd);
?>
                </td>
            </table>
        </ul>

    </section>
</main>
<?php include"../footer/footer.php";?>
</body>

</html>