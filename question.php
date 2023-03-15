<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="question.css">
</head>
<body>




<?php

require('bdconnexion.php');
$conn = mysqli_connect($host, $user, $password, $database);

$titre = $_POST["titre"];


$question1Intitule = $_POST["question1Intitule"];
$question1Choix1 = $_POST["question1Choix1"];
$question1Choix2 = $_POST["question1Choix2"];
$question1Choix3 = $_POST["question1Choix3"];
$question1Choix4 = $_POST["question1Choix4"];
$question1BonneReponse = $_POST["question1BonneReponse"];


$question2Intitule = $_POST["question2Intitule"];
$question2Choix1 = $_POST["question2Choix1"];
$question2Choix2 = $_POST["question2Choix2"];
$question2Choix3 = $_POST["question2Choix3"];
$question2Choix4 = $_POST["question2Choix4"];
$question2BonneReponse = $_POST["question2BonneReponse"];


$question3Intitule = $_POST["question3Intitule"];
$question3Choix1 = $_POST["question3Choix1"];
$question3Choix2 = $_POST["question3Choix2"];
$question3Choix3 = $_POST["question3Choix3"];
$question3Choix4 = $_POST["question3Choix4"];
$question3BonneReponse = $_POST["question3BonneReponse"];


$question4Intitule = $_POST["question4Intitule"];
$question4Choix1 = $_POST["question4Choix1"];
$question4Choix2 = $_POST["question4Choix2"];
$question4Choix3 = $_POST["question4Choix3"];
$question4Choix4 = $_POST["question4Choix4"];


$question4BonneReponse = $_POST["question4BonneReponse"];
$question5Intitule = $_POST["question5Intitule"];
$question5Choix1 = $_POST["question5Choix1"];
$question5Choix2 = $_POST["question5Choix2"];
$question5Choix3 = $_POST["question5Choix3"];
$question5Choix4 = $_POST["question5Choix4"];
$question5BonneReponse = $_POST["question5BonneReponse"];


$question1BonneReponse = $_POST["question1BonneReponse"];

echo $question1BonneReponse;

$sql = "INSERT INTO quizz (Titre, difficulte, date_creation) VALUES ('" . $titre . "', null, SYSDATE())";


if ($connect->query($sql) === TRUE) {
    echo "New quiz created successfully<br>";
    $idQuizz = $connect->insert_id;

    $idQuestion = insertQuestion($question1Intitule, $idQuizz, $connect);
    insertChoixQuestion($question1Choix1, 1, $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question1Choix2, 2, $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question1Choix3, 3,  $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question1Choix4, 4, $question1BonneReponse, $idQuestion, $connect);

    $idQuestion = insertQuestion($question2Intitule, $idQuizz, $connect);
    insertChoixQuestion($question2Choix1, 1, $question2BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question2Choix2, 2, $question2BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question2Choix3, 3,  $question2BonneReponse, $idQuestion,$connect);
    insertChoixQuestion($question2Choix4, 4, $question2BonneReponse, $idQuestion, $connect);

    $idQuestion = insertQuestion($question3Intitule, $idQuizz, $connect);
    insertChoixQuestion($question3Choix1, 1, $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question3Choix2, 2, $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question3Choix3, 3,  $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question3Choix4, 4, $question1BonneReponse, $idQuestion, $connect);

    $idQuestion = insertQuestion($question4Intitule, $idQuizz, $connect);
    insertChoixQuestion($question4Choix1, 1, $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question4Choix2, 2, $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question4Choix3, 3, $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question4Choix4, 4, $question1BonneReponse, $idQuestion, $connect);

    $idQuestion = insertQuestion($question5Intitule, $idQuizz, $connect);
    insertChoixQuestion($question5Choix1, 1, $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question5Choix2, 2, $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question5Choix3, 3,  $question1BonneReponse, $idQuestion, $connect);
    insertChoixQuestion($question5Choix4, 4, $question1BonneReponse, $idQuestion, $connect);

  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }

 

echo "test";



function insertQuestion($intitule, $idQuizz, $connect)
{
    $sql = "INSERT INTO question (intituleQuestion, difficulte, date_creation, quizz_id) VALUES ('" . str_replace("'", "''", $intitule) . "', null, SYSDATE(), " . $idQuizz . ")";
    echo "intitule : " . $intitule;
    echo " intitule2 : " . str_replace("'", "''", $intitule);
    echo "<br>";
    echo $sql;
    echo "<br>";
    echo "INSERT INTO question (intituleQuestion, difficulte, date_creation, quizz_id) VALUES ('" . $intitule. "', null, SYSDATE(), " . $idQuizz . ")";

    echo "<br>";
    if ($connect->query($sql) === TRUE) {
        echo "New question created successfully<br>";
        return $connect->insert_id;
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
    
}

function insertChoixQuestion($reponse, $numeroReponse, $numeroBonneReponse, $idQuestion, $connect)
{

    $bonneReponse = 0;
    if($numeroReponse == $numeroBonneReponse)
    {
        $bonneReponse = 1;
    }

    $sql = "INSERT INTO choix (reponse, bonneReponse, question_id) VALUES ('" .  str_replace("'", "''", $reponse) . "', " . $bonneReponse .", " . $idQuestion .")";

    if ($connect->query($sql) === TRUE) {
        echo "New question created successfully<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
    
}
echo'<div class="button-box"><a href="accueil.php" button class="menu-btn"><img src="https://www.svgrepo.com/show/498963/home.svg" alt="menu-btn" width="40px" height="30px"></a></button></div>';

?>


</body>
</html>