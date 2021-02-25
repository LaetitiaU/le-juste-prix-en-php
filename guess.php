<?php 
$valueG = 241;

$guess = $_POST['guess'];

if ($valueG == $guess) {
echo 'Bonne réponse';

echo  "<a href='index.php'>Retour</a>";
}

elseif ($valueG > $guess) {
    echo "<a href='index.php'>Plus haut</a>";
}

else {
    echo "<a href='index.php'>Plus bas</a>";
}


?>