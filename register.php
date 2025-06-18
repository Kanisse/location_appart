<?php include('db.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
</head>
<body>
    <h1>Register </h1>
    <form action="register.php" method="post">
        <label for="">Login</label>
        <input type="text" name="login">
        <label for="">Password</label>
        <input type="password" name="password">
         <label for="">Phone</label>
        <input type="text" name="phone">
        <input type="submit" value="Register" name="register">
</form>
</body>
</html>

<?php  

if(isset($_POST["register"])){
    $login = $_POST['login'];
    $password= md5($_POST['password']);
    $phone= $_POST['phone'];
    $pdo -> query("insert into users (email, password, phone) values ('$login', '$password', '$phone')");
    header('Location: login.php');
}

?>