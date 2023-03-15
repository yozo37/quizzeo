<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ajouter.css">
</head>
<body>
<form action="connexion.php" method="post">
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un Utilisateur ?</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Pseudo</label>
            <input type="text" name="pseudo">
            <label>email</label>
            <input type="text" name="email">
            <label>Password</label>
            <input type="text" name="password">
            <select name="role">
            <option value="0">Admin</option>
            <option value="2">Utilisateur</option>
            <option value="1">Quizzer</option>
          </select>
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>