<?php
require('bdconnexion.php');
$connect = mysqli_connect($host, $user, $password, $database);

$pseudo = $_POST["pseudo"];
$email = $_POST["email"];
$pwd = $_POST["password"];
$role = $_POST["role"];

if($connect){
    echo("Connected successfully<br>");

    $sql1 = "SELECT count(*) as nbUtilisateurs from utilisateur where pseudo = '" . $pseudo . "'";
    

    $result = mysqli_query($connect, $sql1);

    $data = mysqli_fetch_assoc($result);

    if ($data['nbUtilisateurs'] > 0) {
        echo "Ce pseudo est deja utilise<br>";
        exit;
    }
    else
    {
        echo "Ce pseudo est disponible<br>";
        $sql = "INSERT INTO utilisateur(pseudo, email, password, role) VALUES ('" . $pseudo  . "', '" .$email . "', '" .$pwd . "', " .$role . ")";
        echo $sql . "<br>";
    
        if ($connect->query($sql) === TRUE) {
            echo "New record created successfully<br>";
            header("Location: accueil.php");
	          exit;
          } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
          }
    }  
}
else
{
    echo("Connection failed: " . mysqli_connect_error());
}

$sql2 = "SELECT count(*) as nbUtilisateurs from utilisateur where email = '" . $email . "'";
$result = mysqli_query($connect, $sql2);
$data = mysqli_fetch_assoc($result);


if ($data['nbUtilisateurs'] > 0) {
    
    echo "Cette adresse email est déjà utilisée.";
    exit;
} else {
   
    echo "Cette adresse email est disponible.";
    $sql = "INSERT INTO utilisateur(pseudo, email, password, role) VALUES ('" . $pseudo  . "', '" .$email . "', '" .$pwd . "', " .$role . ")";
        echo $sql . "<br>";
}
if ($connect->query($sql) === TRUE) {
    echo "New record created successfully<br>";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
    echo("Connection failed: " . mysqli_connect_error());
  }


mysqli_close($connect);







?>