<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>

body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  padding-top: 70px; /* espace pour le menu fixe */
}

.navbar {
  position: fixed;
  top: 0;
  width: 100%;
  background-color: #ffffff;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.8rem 2rem;
  z-index: 1000;
}

.nav-logo {
  font-weight: 600;
  font-size: 1.2rem;
  color: #0077cc;
  text-decoration: none;
  margin-right: 2rem;
}

.nav-links a {
  margin: 0 0.8rem;
  text-decoration: none;
  color: #333;
  font-weight: 500;
  transition: color 0.3s;
}

.nav-links a:hover {
  color: #0077cc;
}

.nav-right {
  display: flex;
  align-items: center;
}

.icon-button {
  color: #0077cc;
  font-size: 1.2rem;
  text-decoration: none;
  margin-left: 1rem;
  transition: color 0.3s;
}

.icon-button:hover {
  color: #005fa3;
}

</style>
</head>
<body>
    
</body>
</html>

<header class="navbar">
  <div class="nav-left">
    <a href="index.php" class="nav-logo">MonSite</a>
    <nav class="nav-links">
      <a href="#">Accueil</a>
      <a href="#">Appartement</a>
      <a href="#">Réservation</a>
      <a href="#">Clients</a>
      <a href="#">Mode de paiement</a>
      <a href="#">Contact</a>
    </nav>
  </div>
  <div class="nav-right">
 
    <a href="login.php" class="icon-button">
      <i class="fas fa-sign-in-alt"></i>
    </a>

  
    <a href="logout.php" class="icon-button">
      <i class="fas fa-sign-out-alt"></i>
    </a>
  </div>
</header>

