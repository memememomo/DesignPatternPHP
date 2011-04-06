<?php
require_once('Display.php');
require_once('CountDisplay.php');
require_once('StringDisplayImpl.php');

$d1 = new Display(new StringDisplayImpl('Hello, Japan'));
$d2 = new CountDisplay(new StringDisplayImpl('Hello, World.'));
$d3 = new CountDisplay(new StringDisplayImpl('Hello, Universe.'));

$d1->display();
$d2->display();
$d3->display();
$d3->multi_display(5);
?>