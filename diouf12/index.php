<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.bg-img {
  /* The image used */
  background-image: url("sonatel.jpg");

  min-height: 540px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}
.lam{
  background-color:#8B4513;
}

/* Position the navbar container inside the image */
.container {
  position: absolute;
  margin: 20px;
  width: auto;
}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color:#000000;
  width:100%;
}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  
}
</style>
</head>
<body>
    <center>
<h1 class="lam">Bienvenue Sur Mon Site SONATEL ACCADEMY</h1>
<div class="bg-img">
  <div class="container">
    <div class="topnav">
      <a href="inscription.php">inscription</a>
      <a href="ajout.php">ajouter appr</a>
      <a href="listeappr.php">liste appr</a>
      <a href="modif.php">modifier appr</a>
      <a href="ajoutpromo.php">ajout promo</a>
      <a href="listepromo.php">liste promo</a>
      <a href="modifpromo.php">modifier promo</a>
      <a href="recherche.php">afficher liste apprenant</a>
    </div>
   
  </div>
  </div>
</center>
</body>
</html>
