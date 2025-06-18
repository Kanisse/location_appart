<?php 
include("db.php");
$id = $_GET["id"];
$pdo -> query("update apartments 
set is_available=1 where id=$id");
header("Location: apartments.php");