<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>APAEIA</title>
    <link rel="stylesheet" href="style.css" />
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
  />
</head>

  <body>
  <header>
  
  <nav>
      <div class="sucess">
        Bonjour <?php echo $_SESSION['username']; 
        ?>
        <a href="logout.php">Déconnexion</a>
        </div> 
     
        <a href="index.php">Accueil</a>
        <div class="dropdown">
        <button class="outils">Outils</button>
        <div class="dropdown-child">
          <a href="application.php">Application</a>
          <a href="https://docs.google.com/document/d/1VqLaJo0amkRZ59FRvjcIL0jjOdXzsK49X_X0E1yxwIM/edit?usp=sharing">Documentation créateur</a>
          <a href="doc-utilisateur.php">Documentation Utilistateur</a>
        </div>
        </div>
        <a href="intranet.php">Intranet</a>
        


      	</nav></br>
    </header>
    <main>
      <h1 class="Titre-Page">Outils<br/>Document</h1>
      <img src="images/drive.png"/>
    </main>
</html>




