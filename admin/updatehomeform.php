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
        <h1>UPDATE HOME PAGE</h1>

        <ul class="listing">
        <form  method="post"enctype="multipart/form-data" action="../admin/homeupdate.php">
        <label>Title</label><br>
        <input type="text" name="title"><br>
        <label>Description</label><br>
        <input type="text" name="desc"><br>
        <input type="hidden" name="dat" value="<?php echo date('Y-m-d');?>"><br>
        <label>File</label>
        <input type="file"name="afile"><br>
        <input type="submit" name="submit" value="Submit">
        </form>
        </ul>

    </section>
</main>
<?php include"../footer/footer.php";?>
</body>

</html>