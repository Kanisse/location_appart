<?php include('db.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
        body {
  margin: 0;
  padding: 0;
  font-family: 'Abadi MT Condensed Light', 'Abadi MT Light', 'Poppins', sans-serif;

  background-color: #f4f7fb;
  background-image: url('data:image/svg+xml;utf8,<svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="pattern" patternUnits="userSpaceOnUse" width="100" height="100"><circle cx="50" cy="50" r="20" fill="%23e1e8f0" opacity="0.3" /></pattern></defs><rect width="100%" height="100%" fill="url(%23pattern)" /></svg>');
  background-size: cover;
  background-attachment: fixed;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.form-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
}

.login-form {
  background-color: white;
  padding: 2rem 2.5rem;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
  box-sizing: border-box;
}

.login-form h2 {
  text-align: center;
  margin-bottom: 1.5rem;
  color: #333;
}

.form-group {
  margin-bottom: 1.2rem;
}

.form-group label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: 500;
  color: #555;
}

.form-group input {
  width: 100%;
  padding: 0.6rem 0.8rem;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 1rem;
  transition: border-color 0.3s;
}

.form-group input:focus {
  border-color: #0077cc;
  outline: none;
}

input[type="submit"] {
  width: 100%;
  padding: 0.8rem;
  border: none;
  border-radius: 8px;
  background-color: #0077cc;
  color: white;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s;
}

input[type="submit"]:hover {
  background-color: #005fa3;
}
.register-link {
  margin-top: 1rem;
  text-align: center;
  font-size: 0.95rem;
  color: #666;
}

.register-link span {
  margin-right: 4px;
}

.register-link a {
  color: #0077cc;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s, text-decoration 0.3s;
}

.register-link a:hover {
  color: #005fa3;
  text-decoration: underline;
}
    </style>
<body>

   
    <div class="form-container">
  <form method="post" action="login.php" class="login-form">
    <h1>Login</h1>
    <div class="form-group">
      <label for="email">Adresse Email</label>
      <input type="email" name="login" required />
    </div>
    <div class="form-group">
      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" required />
    </div>
    <input type="submit" value="Se connecter" name="connect">
<div class="register-link">
  <span>Pas encore de compte ?</span>
  <a href="register.php">Créer un compte</a>
</div>  
</form>

</div>
</body>
</html>
<?php

if(isset($_POST['connect'])){
    $login = $_POST['login'];
    $password= md5($_POST['password']);
$st = $pdo -> query("select * from users 
where email = '$login'
and password='$password'");
    if($st -> rowCount()>0){
        session_start();
        $row=$st-> fetch(PDO::FETCH_ASSOC);
        $_SESSION["role"]= $row['role'];
        $_SESSION['login']=$login;
        $_SESSION["id"]=$row["id"];

        header("Location: home.php");
    }
    else {
        echo "<b style= 'color:red;'>login ou mot de passe incorrect<b>";
    }
}