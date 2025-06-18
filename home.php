<?php 
include("db.php");
session_start();
if(isset($_SESSION['login'])){
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
   <title>Document</title>
</head>
<body>
    <h1> Welcome <?php echo $_SESSION['login'];  ?></h1>
<a class="btn btn-danger" href="logout.php"> Logout </a>
<a href="add.php"><i class="fa fa-plus"></i>New Reservation </a>
<table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>costumer</th>
                <th>Apartment</th>
                <th>start_date</th>
                <th>end_date</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
<?php  
$st = $pdo -> query("select * from reservations");
while($row =$st -> fetch(PDO::FETCH_ASSOC)){?>
    <tr>
    <td><?php 
    $id= $row["user_id"];
    $st1= $pdo-> query("select * from users where id=$id");
    $row1=$st1-> fetch(PDO::FETCH_ASSOC);  
    echo $row1["name"];
    ?></td>
    <td><?php 
        $id= $row["apartment_id"];
        $st2= $pdo-> query("select * from apartments where id=$id");
        $row2=$st2-> fetch(PDO::FETCH_ASSOC);
        echo $row2["title"];
    ?></td>
    <td><?php echo $row["start_date"]; ?></td>
    <td><?php echo $row["end_date"]; ?></td>
    <td><?php echo $row["status"];?></td>
<?php
    if($_SESSION["role"]=="admin"){
        ?>
<td><a href="delete.php?id=<?php echo $row["id"];?>"> 
        <i class="fa fa-trash"></i></a></td>
    <td><a href="edit.php?id=<?php echo $row["id"];?>"> 
        <i class="fa fa-pencil"></i></a></td>
<?php    } ?>
    <td></td>
</tr>
<?php
}
?>
        </tbody>
    </table>
<?php }
else{
include("forbidden.html");
}
?>



</body>
</html>
