<?php include('db.php'); ?>
<?php  
session_start();
if($_SESSION["role"]=="admin"){
$id = $_GET['id'];
$pdo -> query("delete from reservations where id= $id");
header("Location: home.php");
}
else{
    header("Location: forbidden.html");
    }
