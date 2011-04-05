<?php
require_once('PrintBanner.php');

$p = new PrintBanner('Hello');
$p->print_weak();
$p->print_strong();
?>