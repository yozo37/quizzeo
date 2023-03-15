<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signUp.css">
    
    
</head>
<body>
  <form action="connexion.php" method="post">
<form action="accueil.php" method="post"> 
    <div class="SingUp">
        <h1>Inscription</h1>
        
          <select name="role">
            <option value="0">Admin</option>
            <option value="2">Utilisateur</option>
            <option value="1">Quizzer</option>
          </select>
          <input type="text" name="pseudo" placeholder="Nom d'utilisateur">
          <input type="text" name="email" placeholder="Adresse Email">
          <input type="password" name="password" placeholder="Mot de passe">
          <input type="submit" value="Creer Votre Compte">
          <button><a href="login.php">Vous avez deja un Compte</a></button>
        </form>
      </div>
      <div class="Titre">
        <h1>Bienvenue sur QUEZZEO</h1>
      </div>
      <div class="wrapper">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    </form>
      
</body>
</html>