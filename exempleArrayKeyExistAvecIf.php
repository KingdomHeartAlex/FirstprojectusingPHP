<?php
$recipe =[
    'title'=>'Salade Romaine',
    'recipe'=>'Etape 1 : lavez la salade ; Etape 2 : euh ...',
    'author'=>'laurene.castor@exemple.com',
];

if(array_key_exists('title',$recipe))
{
    echo 'La clé "title" se trouve dans la recette !';
}

if (array_key_exists('commentaires', $recipe))
{
    echo 'La clé "commentaires" se trouve dans la recette !';
}

?>

// On ne trouve que title et pas commentaire, seule la première condition sera donc exécutée