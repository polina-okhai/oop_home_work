<?php
ini_set('display_errors', 1);

require 'Entities/Figure.php';
require 'Entities/Rectangle.php';
require 'Entities/Triangle.php';
require 'Entities/Circle.php';

$rectangle = new Rectangle(5, 10);
echo $rectangle->perimeter();
var_dump($rectangle);
?>
