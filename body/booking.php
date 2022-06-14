<?php include"../header/header.php" ?>

<body>
<!--create form for booking-->
    <div style="margin-left: 350px;text-align:center;margin-bottom:300px;">
        <form action="../admin/insertbooking.php" method="POST">
            <label for="">Firstname</label><br>
            <input type="text" name="first"><br>
            <label for="">Lastname</label><br>
            <input type="text" name="last"><br>
            <label for="">Address</label><br>
            <input type="text" name="address"><br>
            <label for="">Number of Quest</label><br>
            <input type="number" name="numb"><br>
            <input type="hidden" name="dat" value="<?php echo date('Y-m-d h:i:s');?>"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php include"../footer/footer.php"?>
</body>