<?php
$isAllowedToEnter = "oui";

// Si on a l'autorisation d'entrer
if ($isAllowedToEnter == "Oui"){
    // Instructions à exécuter quand on est autorisé à entrer
} // Sinon Si on n'a pas l'autorisation d'entrer
elseif ($isAllowedToEnter == "Non"){
    // Instructions à exécuter quand on n'est pas autorisé à entrer
} // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
else {
    echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te 
    plaît ?";
}
?>