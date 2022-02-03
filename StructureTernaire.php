<?php
$userAge = 24;

$isAdult = ($userAge >= 18) ? true : false;

// Ou mieux, dans ce cas précis
$isAdult = ($userAge >= 18);
?>

/* explication : La condition testée est $userAge >= 18  .

Si c'est vrai, alors la valeur indiquée après le point d'interrogation (ici true) sera affectée à la variable  $isAdult  .

Sinon, c'est la valeur qui suit le symbole : (ici false ) qui sera affectée à  $isAdult  */