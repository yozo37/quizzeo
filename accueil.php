<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="accueil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    
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
        <li class="menu-item"><a href="ajouter2.php">ADD user</a></li>
        <li class="menu-item"><a href="setting.php">Setting</a></li>
        <li class="menu-item"><a href="login.php">Deconnexion</a></li>
      </ul>
    </nav>
    <p>quizzeo</p>
    
    <a href=""><button class="menu-btn"><a href=""></a><img src="https://www.svgrepo.com/show/498963/home.svg" alt="menu-btn" width="40px" height="30px"></button></a>
</header>
    <div class="quizzes-container">
        
    <?php
      require("bdconnexion.php");
      $sql = "SELECT * FROM quizz";
      
      $result = mysqli_query($connect, $sql);
     
if ($result != null) {
 
  while($row = mysqli_fetch_assoc($result)) {
    echo "<div class='quiz-box'>
    <h2>".$row["Titre"]."</h2>
   
    <a href='style2.php?id=".$row["id"]."'>Jouer</a>
  </div>";
  }


}

    
     
        
      
    ?>

      
    </div>
    <script src="accueil.js"></script>
</body>
</html>
</body>
</html>
