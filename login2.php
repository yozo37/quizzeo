<?php

require("bdconnexion.php");

$pseudo = $_POST["pseudo"];
$password = $_POST["password"];


$sql = "SELECT * FROM utilisateur WHERE pseudo='"  .  $pseudo  . "' AND password='"  .  $password  . "';";

$result = mysqli_query($connect, $sql);
$data= mysqli_fetch_assoc($result);
if ($data != null) {
	session_start();
	$id_session = session_id();
	$_SESSION['pseudo'] = $pseudo;
	$_SESSION['idUser'] = $data['id'];
	header("Location: accueil.php");
	echo "Vous êtes connecté." ;
	exit;
} else {

	echo "Nom d'utilisateur ou mot de passe incorrect.";
}


mysqli_close($connect);
?>

