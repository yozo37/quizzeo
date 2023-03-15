<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="style2.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="style2.css">
</head>
<body>

    <h1>Quiz?!</h1>   
    <header> 
        <a href="accueil.php" button class="menu-btn"><img src="https://www.svgrepo.com/show/498963/home.svg" alt="menu-btn" width="40px" height="30px"></a></button></header>
  
		<div id="score"></div>
       </div> 
	</div>
    <form method="POST" action="validationquizz.php">
       
        <?php
            require("bdconnexion.php");
           

            $idQuizz = $_GET["id"];
            echo  "<input type='hidden'  name='idQuizz' value='" . $idQuizz ."'/>";

            echo "<h1>" . $idQuizz . "</h1>";

            $sqlQuizz = "select titre from quizz where id = " . $idQuizz;
            $resultQuizz = mysqli_query($connect, $sqlQuizz);
            $dataQuizz = mysqli_fetch_assoc($resultQuizz);
            $titre = $dataQuizz['titre'];

            echo "<h1>" . $titre . "</h1>";

            $sqlQuestions = "select * from question where quizz_id = " . $idQuizz;

            $resultQuestions = mysqli_query($connect, $sqlQuestions);
            
            if ($resultQuestions != null) {
            $numQuestion = 1;
            while($row = mysqli_fetch_assoc($resultQuestions)) {
                echo $row["intituleQuestion"]   ;
                echo "<br>";
                $sqlChoix = "select * from choix where question_id = " . $row["id"] ;
                $resultChoix = mysqli_query($connect, $sqlChoix);

                if ($resultChoix != null) {
                    while($row = mysqli_fetch_assoc($resultChoix)) {
                        echo "<input type='radio' name='choixQuestion". $numQuestion ."' value='".$row["id"]."' >";
                        echo $row["reponse"]   ;
                        echo "<br>";
                    
                    }
                }
                $numQuestion++;
            }
        }
        

        ?>
        <input type="submit" value="Verifier">
    </form> 

</body>
</html>