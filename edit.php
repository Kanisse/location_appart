<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <div class="form-container">
    <form action="edit.php" method="post">
        <label for=""> costumer</label>
        <?php
        $id= $_GET["id"];
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
</div>
</body>
</html>

