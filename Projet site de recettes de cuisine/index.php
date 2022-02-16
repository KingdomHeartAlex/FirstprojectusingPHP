<?php
$sqlQuery = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';

$db->prepare($sqlQuery);
$recipes = $db->execute([
    'author' => 'mathieu.nebra@exemple.com',
    'is_enabled' => true,
]);