<?php
$isAllowed = allowRecipe([
    'title' => 'Escalope milanaise',
    'recipe' => '',
    'author' => 'mathieu.nebra@exemple.com',
    'is_enabled' => true,
]);

if ($isAllowed) {
    echo 'La recette doit être affichée !';
} else {
    echo 'La recette doit être cachée !';
}