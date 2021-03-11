
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
        <a href="index.php"><img src="images/logo.png" /></a>
        <nav>
        <a href="index.php">Accueil</a>
        <a href="intranet.php">Intranet</a>
        <a href="doc-utilisateur.php">Documentation Utilistateur</a>
        <a href="application.php">Application</a>
        <br/><br/><br/><div class="sucess">
        Bonjour <?php echo $_SESSION['username']; ?>
        <a href="logout.php">Déconnexion</a>
      	</div> </nav></br>

        
    </header>
    <main>
      <h1 class="Titre-Page">Application</h1>
    </main>
</html>

