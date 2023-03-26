<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal();
$parrot = new Animal();
$bee = new Animal();

$animals = [$lion, $parrot, $bee];

$lion->name = 'lion';

$lion->pawNumber = 4;

$lion-> size = 50;

$lion->carnivorous = true;

$lion->threatenedLevel = 'VU';

$parrot->name = 'parrot';

$parrot->pawNumber = 2;

$parrot-> size = 20;

$parrot->carnivorous = false;

$parrot->threatenedLevel = 'LC';

$bee->name = 'bee';

$bee->pawNumber = 6;

$bee-> size = 10;

$bee->carnivorous = false;

$bee-> threatenedLevel = 'LC';
/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>