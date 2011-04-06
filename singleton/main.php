<?php
require_once('Singleton.php');

$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();

if ($obj1 == $obj2) {
  print 'obj1とobj2は同じインスタンスです。' . "\n";
} else {
  print 'obj1とobj2は同じインスタンスではありません。' . "\n";
}
print "End.\n";
?>