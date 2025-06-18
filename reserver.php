<?php 
include("db.php");
session_start();
if(isset($_SESSION["login"])){
?>
<form method="POST" action="reserver.php">
    Input Date: <input type="date"
     name="inputDate" required><br>
     <input type="hidden" name="id"
      value='<?php echo $_GET['id'] ; ?>'>
    <input type="submit" name="reserver" value="reserver">
</form>

<?php

if(isset($_POST["reserver"])){
    $inputDate = $_POST["inputDate"];
    $id=$_POST["id"];
    $date = date ("Y-m-d",
     strtotime($inputDate));
    $st =$pdo -> query("select * from 
    reservations where 
    apartment_id='$id' and '$date'
    BETWEEN start_date and end_date");
if($st -> rowCount()>0){
    echo "already booked";
}
else{
   $pdo -> query("insert into reservations
    (user_id, apartment_id, start_date, end_date)
    VALUES ('".$_SESSION["id"]."', '$id', '$date', '$date')");
}
}


}
else  {
    header("Location: login.php");
}
