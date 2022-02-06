<?php
$users=[
    'Alexandra Alsen Dykler',
    'Mickael Andrieu',
    'Laurène Castor',
];

$positionAlexandra= array_search('Alexandra Alsen Dykler', $users);
echo '"Alexandra" se trouve en position ' . $positionAlexandra . PHP_EOL;

$positionLaurène= array_search('Laurène Castor', $users);
echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL;

?> // PHP_EOL indique une fin de ligne, on retourne à la ligne