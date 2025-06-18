<?php 
include("db.php");
$id = $_GET["num"];
$pdo -> query("update apartments 
set is_available=0 where id=$id");
header("Location: apartments.php");

