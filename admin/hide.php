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
<p>Use  code category 102= Mains , 101 = Starters, 103 = Deserts</p>
        <h1>Hide Menu List</h1>

        <ul class="listing">
            <table>
                <td>
 <form method='POST' action=''>
 <label> Code category</label>
  <input type="text" name="idcat">
                <label>Select category</label>
                <select name="categoryId">                 <option value="0">Hide</option>
                  <option value="1">Starters</option>
                  <option value="2">Mains</option>
                  <option value="3">Deserts</option>
                  <option value="4">Specials</option>
               </select>
                <input type='submit' name='submit' value='Submit'>
            </form>
  <?php
  // use update code to hide list items from menu
$code= filter_input(INPUT_POST,"idcat");
$cat = filter_input(INPUT_POST,"categoryId");
$pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
       $up ="UPDATE menu SET  categoryId = '$cat'  WHERE code = '$code' ";
	   $upd = $pdo->prepare($up);
	   $upd->execute();

?>
                </td>
            </table>
        </ul>

    </section>
</main>
<?php include"../footer/footer.php";?>
</body>

</html>