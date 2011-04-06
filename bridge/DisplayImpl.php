<?php
class DisplayImpl {
  public function __construct() {
  }

  public function raw_open() {
    throw "raw_open() is abstract.";
  }

  public function raw_print() {
    throw "raw_print() is abstract.";
  }

  public function raw_close() {
    throw "raw_close() is abstract.";
  }
}
?>