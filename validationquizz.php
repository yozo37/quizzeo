
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="validationquizz.css">
</head>
<body>
    

<?php
    require("bdconnexion.php");
    session_start();

  

    $choixQuestion1 = $_POST["choixQuestion1"];
    $choixQuestion2 = $_POST["choixQuestion2"];
    $choixQuestion3 = $_POST["choixQuestion3"];
    $choixQuestion4 = $_POST["choixQuestion4"];
    $choixQuestion5 = $_POST["choixQuestion5"];
    $idQuizz = $_POST["idQuizz"];
    $idUser = $_SESSION["idUser"];

    
    $resultat1 =  verifierChoix ($choixQuestion1, $connect);
    $resultat2 =  verifierChoix ($choixQuestion2, $connect);
    $resultat3 =  verifierChoix ($choixQuestion3, $connect);
    $resultat4 =  verifierChoix ($choixQuestion4, $connect);
    $resultat5 =  verifierChoix ($choixQuestion5, $connect);
   

    $score = $resultat1 + $resultat2 + $resultat3 + $resultat4 + $resultat5;

    echo '<div class="score-box"><h1> Votre score : ' . $score . '</h1></div>';
    echo'<div class="button-box"><a href="accueil.php" button class="menu-btn"><img src="https://www.svgrepo.com/show/498963/home.svg" alt="menu-btn" width="40px" height="30px"></a></button></div>';

    

 
    $sql = "INSERT INTO User_Quiz (id_user, id_quiz, score) VALUES (" .  $idUser . ", " . $idQuizz .", " . $score .")";

   
    


    function verifierChoix($idChoix, $conn)
    {
        $sql = "select BonneReponse from choix where id = " . $idChoix;
        $result = mysqli_query($conn, $sql);
        $data= mysqli_fetch_assoc($result);
        return $data['BonneReponse'];
    }


?>

</body>
</html>
     