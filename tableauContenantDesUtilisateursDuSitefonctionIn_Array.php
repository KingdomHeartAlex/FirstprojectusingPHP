<?php
$users=[
    'Alexandra Alsen Dykler',
    'Mickael Andrieu',
    'Laurene Castor',
];

if(in_array('Alexandra Alsen Dykler', $users))
{
    echo 'Alexandra fait bien partie des utilisateurs enregistrés !';
}

if(in_array('Arlette Chabot', $users))
{
    echo 'Arlette fait bien partie des utilisateurs enregistrés !';
}

?>

// On ne voit que le message pour Alexandra, car Arlette ne fait pas partie des utilisateurs enregistrés