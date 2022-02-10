
<?php
// Souvent on identifie cet objet par la variable $conn ou $db
$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=my_recipes;charset=utf8',
    'root',
    'root'
);
?>

<footer class="bg-light text-center text-lg-start mt-auto">
  <div class="text-center p-3">
    © 2021 Copyright:
    <a class="text-dark" href="https://openclassrooms.com/">OpenClassrooms</a>
  </div>
</footer>

