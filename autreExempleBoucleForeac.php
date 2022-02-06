<?php
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'mickael.andrieu@exemple.com',
    'enabled' => true,
];

foreach ($recipe as $value) {
    echo $value . ' ';
}

/** 
 * Affiche
 * Cassoulet Etape1 : des flageolets, Etape 2 : ... mickael.andrieu@exemple.com
 */
?>