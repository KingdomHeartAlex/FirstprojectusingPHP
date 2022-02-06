<?php

$recipes = [...]; // Les recettes

// AVANT

foreach ($recipes as $recipe) {
    if ($recipe['is_enabled']) {
        // echo $recipe['title'] ..
    }
}

// APRES

function getRecipes(array $recipes) : array
{
    $validRecipes = [];

    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }

    return $validRecipes;
}

// construire l'affichage HTML des recettes
foreach(getRecipes($recipes) as $recipe) {
    // echo $recipe['title'] .. 
}