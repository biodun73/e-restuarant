<?php
//create class to fetch out data 
class menuList{
    function listmenu(){
			$pdo = new PDO('mysql:dbname=kitchen;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
			$categories = $pdo->query('SELECT * FROM category');

			foreach ($categories as $category) {
				echo '<ul>';
				echo "<li><a href=".$category['name'].".php".">".$category['name']."</a></li>";
		        echo'</ul>';
			}
			}
}
$menu = new menuList();
$menu->listmenu();
?>