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
  	<link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>APAEIA</title>
    
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>

</head>
  <body>
    <header>
        <a href="index.php"><img src="images/logo.png" /></a>

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
    
      <h1 class="Titre-Page">Accueil</h1>
      <p class="para-index">APAEIA est un projet réalisé en BTS SIO 1, par groupe en labo salle 136.<br/><br/>
        Notre groupe est constituée de 4 personnes (3 developpeurs et 1 réseau) :<br/>
        - Romain Chartier <br/>
        - Zachary Huguet <br/>
        - Allan BIVILLE <br/>
        - Luidjy Aubel<br/>
      </p>
    </main>
</html>
