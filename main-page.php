<?php 
session_start();

if (!isset($_SESSION["name"])) {
    header("location: index.php");
    exit;
}

$add_url = '/add-page.php';
$read_url = '/read-page.php';

if(isset($_POST['read'])) {
    header('Location: '.$read_url);
} elseif (isset($_POST['add'])){
    header('Location: '.$add_url);
} 
?>

<form method="POST" action="">
<input type = "submit" name="read" value="Посмотреть пользователей">
<input type = "submit" name="add" value ="Добавить пользователя">
</form>