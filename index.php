<?php
require 'Objects/rectangle.php';
require 'Objects/triangle.php';
require 'Objects/circle.php';
require 'Objects/interface.php';
ini_set('display_errors', 1);

$interface = new Figure(2, 3);
echo $interface->perimeter();
 ?>
