<?php
$host ="localhost";
$user ="root";
$password ="";
$database ="quiz";

$connect = mysqli_connect($host,$user,$password,$database);
mysqli_set_charset($connect, 'utf8');


$idQuizz = $_GET["id"];

echo "<h1>" . $idQuizz . "</h1>";

$sqlQuizz = "select titre from quizz where id = " . $idQuizz;
$resultQuizz = mysqli_query($connect, $sqlQuizz);
$dataQuizz = mysqli_fetch_assoc($result);
$titre = $dataQuizz['titre'];

echo "<h1>" . $titre . "</h1>";


$sqlQuestions = "select * from question where quizz_id = " . $idQuizz;
$sqlChoix = "select * from choix where question_id = ";

?>