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
          <a href="document.php">Documentation créateur</a>
          <a href="doc-utilisateur.php">Documentation Utilistateur</a>
        </div>
        </div>
        <a href="intranet.php">Intranet</a>
        


      	</nav></br>
        
    </header>
    <main>
      <h1 class="Titre-Page">Documentation Utilistateur</h1>
    </main>
    
  </body>
</html>