<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Ajoutequiz.css">
</head>
<body>
    <header>
        <label for="menu-cb" class="menu-label">
          <svg viewBox="0 0 32 32" fill="#666">
            <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
            <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
            <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
          </svg>
        </label>
        <input id="menu-cb" type="checkbox" class="menu-cb">
        <nav class="menu-nav">
          <ul>
            <li class="menu-item"><a href="accueil.php">QUIZ</a></li>
            <li class="menu-item"><a href="ajoutequiz.php">ADD quiz</a></li>
            <li class="menu-item"><a href="ajouter.php">ADD user</a></li>
            <li class="menu-item"><a href="page4">Setting</a></li>
            <li class="menu-item"><a href="login.php">Deconnexion</a></li>
          </ul>
        </nav>
        <H1>Creation</H1>
        <a href="accueil.php"><img src="https://www.svgrepo.com/show/498963/home.svg" alt="Accueil" width="60px" height="50px"style="background-color: #fab800;" ></a>
 
    </header>
    <form action="question.php" method="post">
        Titre : <input type="text" name="titre"><br>
        <div class="question">
            Question 1 : <input type="text" name="question1Intitule"><br>
            Choix 1 : <input type="text" name="question1Choix1"><br>
            Choix 2 : <input type="text" name="question1Choix2"><br>
            Choix 3 : <input type="text" name="question1Choix3"><br>
            Choix 4 : <input type="text" name="question1Choix4"><br>
            Bonne reponse : <select name="question1BonneReponse"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><br>


            Question 2 : <input type="text" name="question2Intitule"><br>
            Choix 1 : <input type="text" name="question2Choix1"><br>
            Choix 2 : <input type="text" name="question2Choix2"><br>
            Choix 3 : <input type="text" name="question2Choix3"><br>
            Choix 4 : <input type="text" name="question2Choix4"><br>
            Bonne reponse : <select name="question2BonneReponse"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><br>
            
            Question 3 : <input type="text" name="question3Intitule"><br>
            Choix 1 : <input type="text" name="question3Choix1"><br>
            Choix 2 : <input type="text" name="question3Choix2"><br>
            Choix 3 : <input type="text" name="question3Choix3"><br>
            Choix 4 : <input type="text" name="question3Choix4"><br>
            Bonne reponse : <select name="question3BonneReponse"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><br>
            Question 4 : <input type="text" name="question4Intitule"><br>
            Choix 1 : <input type="text" name="question4Choix1"><br>
            Choix 2 : <input type="text" name="question4Choix2"><br>
            Choix 3 : <input type="text" name="question4Choix3"><br>
            Choix 4 : <input type="text" name="question4Choix4"><br>
            Bonne reponse : <select name="question4BonneReponse"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><br>
            Question 5 : <input type="text" name="question5Intitule"><br>
            Choix 1 : <input type="text" name="question5Choix1"><br>
            Choix 2 : <input type="text" name="question5Choix2"><br>
            Choix 3 : <input type="text" name="question5Choix3"><br>
            Choix 4 : <input type="text" name="question5Choix4"><br>
            Bonne reponse : <select name="question5BonneReponse"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><br>
          <input type="submit" value="Ajouter" >
        </div> 
    </form>
</body>
</html>