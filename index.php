<?php 
session_start();
require_once "library/controller.php";?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("include/header.php") ?>
<body>
<div class="wrapper">
    <header>
    
        <?php require_once("include/menu.php") ?>
    </header>

    <main role="main" class="container">
        <div class="containerMain">
            <?php require_once $page; ?>
        </div>
    </main>
    <?php require_once("include/footer.php") ?>
</div>
</body>
</html>

<?php
//is_dir
//mkdir
//file_get_contents('');
//file_put_contents();
//$catalog = scandir("C:\\");
//echo __DiR__;
//echo dirname(__DiR__);
//echo file_exists("Procfile.txt") ? "yes" : "no";
//require_once("store.php");
//$user = [
	//'name' => 'Polina',
	//'email' => 'vasil@gmail.com'
//];
//save($user);
//delet("Polina");
//var_dump(clear());
/*$array = ["pavel", "oleg"];
echo json_encode($array);
echo "<br/>";

echo '<pre>';
var_dump($user);

echo "<pre>";

echo "</pre>";

$s = serialize($user);
$arr = unserialize($s);
var_dump($arr);
echo $s;*/





?>