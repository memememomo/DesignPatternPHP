<?php
require_once('DisplayImpl.php');

class StringDisplayImpl extends DisplayImpl {
  protected $string = null;
  protected $width = null;

  public function __construct($string) {
    $this->width = strlen($string);
    $this->string = $string;
  }

  public function raw_open() {
    $this->print_line();
  }

  public function raw_print() {
    printf("|%s|\n", $this->string);
  }

  public function raw_close() {
    $this->print_line();
  }

  public function print_line() {
    print "+";
    for ($i = 0; $i < $this->width; $i++) {
      print "-";
    }
    print "+\n";
  }
}
?>