<?php
require('bdconnexion.php');
$connect = mysqli_connect($host, $user, $password, $database);

$sql = "SELECT * FROM utilisateurs";
$result = mysqli_query($bdd, $sql);

// Affichage des résultats
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["pseudo"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td>" . $row["role"] . "</td>";
        echo "<td><a href='modifier.php?id=" . $row["id"] . "'>Modifier</a></td>";
        echo "<td><a href='supprimer.php?id=" . $row["id"] . "'>Supprimer</a></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

// Fermeture de la connexion
mysqli_close($bdd);
?>