<?php
$recipe = [
    'title' => 'Salade Romaine',
        'recipe' => 'Etape 1 : lavez la salade ; Etape 2 : euh ... ',
        'author' => 'laurene.castoru@exemple.com',
        'is_enabled' => true,
];

// au minimum
if ($recipe['is_enabled']){
    return true;
} else {
    return false;
}

// mieux
$isEnabled = $recipe['is_enabled'];

// encore mieux
if(array_key_exists('is_enabled', $recipe)){
    $isEnabled = $recipe['is_enabled'];
} else {
    $isEnabled = false;
}


?>