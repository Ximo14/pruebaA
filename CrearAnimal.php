<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Animales</title>
  </head>
  <body>
    <?php

    include 'Animal.php';

    $animal1 = new Animal();
    $animal1-> setAnimal('Cienpies');
    echo '<br>Se llama '.$animal1->getAnimal();

    $animal1-> setPatas('100 patas');
    echo '<br>Tiene '.$animal1->getPatas();

    $animal2 = new Animal();
    $animal2-> setAnimal('Araña');
    echo '<br>Se llama '.$animal2->getAnimal();

    $animal2-> setPatas('8 patas');
    echo '<br>Tiene '.$animal2->getPatas();
     ?>
  </body>
</html>
