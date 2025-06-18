<?php  
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <h1>Welcome to the Reservation System</h1>
    <h2>Reservations List</h2>
    <a href="add.php" class="btn btn-primary"> New Reservation </a>
    <table class="table table-dark table-hover">
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
    <td><?php echo  $row["status"]; 
    ?></td>
    <td>
<a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger"> Delete</a> </td>
</tr>
<?php
}
?>
        </tbody>
    </table>
</body>
</html>