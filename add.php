<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="post">
        <label for=""> costumer</label>
        <?php
$st = $pdo -> query("select * from users where role='client'");
        ?>
        <select name="user">
            <option value="" disabled></option>
<?php while($row= $st -> fetch(PDO::FETCH_ASSOC))
{ ?>
<option value="<?php echo $row['id']; ?>">
    <?php echo $row['name']; ?> </option>
<?php  }?>
    </select>
    <label for=""> Apartment</label>
        <?php
$st1 = $pdo -> query("select * from apartments");
        ?>
        <select name="apartment">
            <option value="" disabled></option>
<?php while($row1= $st1 -> fetch(PDO::FETCH_ASSOC))
{ ?>
<option value="<?php echo $row1['id']; ?>">
    <?php echo $row1['title']; ?> </option>
<?php  }?>
    </select>
<label for="">Start Date</label>
<input type="date" name="start_date">
<label for="">End Date</label>
<input type="date" name="end_date">
<label for="">Status</label>
<select name="status" id="">
    <option value="en attente">Pending</option>
    <option value="confirmée">Confirmed</option>
    <option value="annulée">Canceled</option>
    <option value="terminée">Finished</option>
</select>
<input type="submit" value="Store" name="Store" class="btn btn-primary">
</form>
</body>
</html>

<?php
if(isset($_POST['Store'])){
    $costumer=$_POST['user'];
    $apartment=$_POST['apartment'];
    $start_date= $_POST['start_date'];
    $end_date= $_POST['end_date'];
    $status= $_POST['status'];
$pdo -> query("insert into reservations
 (user_id,apartment_id, start_date, end_date, status) 
 values ('$costumer','$apartment','$start_date',
 '$end_date', '$status') ");
 header("Location: home.php");
}


?>