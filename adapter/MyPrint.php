<?php
class MyPrint {
  public function __construct() {

  }

  public function print_weak() {
    throw "print_weak is abstract.";
  }

  public function print_strong() {
    throw "print_strong is abstract.";
  }
}
?>