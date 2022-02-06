<?php
$recipe=[
    'title' => 'Salade Romaine',
        'recipe' => 'Etape 1 : lavez la salade ; Etape 2 : euh ...',
        'author' => 'laurene.castor@exemple.com',   
];

echo sprintf(
    '%s par "%s" : %s',
    $recipe['title'],
    $recipe['author'],
    $recipe['recipe'],
);

?>