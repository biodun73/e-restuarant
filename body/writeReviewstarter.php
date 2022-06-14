<?php include"../header/header.php"; ?>
<img src="../images/randombanner.php" />
<main class="sidebar">
    <section class="left">
        <?php 
			include"menuListClass.php";
	?>
    </section>

  <section class="right">

        <h1>Review</h1>

        <ul class="listing">
            <form method='POST' action='startereviewrate.php'>
                <label>Rate</label>
                <input type='text' name='rate' size='5'>
                <label>Name</label>
                <input type='text' name='nam' size='5'>
                <label>Text</label>
                <textarea rows='1' cols='10' name='tex'></textarea>
                <label>Select category</label>
                <select name="categoryId">
                  <option value="1">Starters</option>
                  <option value="2">Mains</option>
                  <option value="3">Deserts</option>
                  <option value="4">Specials</option>
               </select>
                <input type="hidden" name="dat" value="<?php echo date('y-m-d'); ?>">
                <input type='submit' name='submit' value='Submit'>
            </form>
                        <?php
 
?>
        </ul>
    </section>
</main>
<?php include"../footer/footer.php";?>
</body>

</html>