<?php
require_once('AbstractDisplay.php');

class StringDisplay extends AbstractDisplay {
  private $string;
  private $width;

  public function __construct($string) {
    $this->string = $string;
    $this->width = strlen($string);
  }

  public function open() {
    $this->printLine();
  }

  public function myprint() {
    printf("|%s|\n", $this->string);
  }

  public function close() {
    $this->printLine();
  }

  private function printLine() {
    print "+";
    for ($i = 0; $i < $this->width; $i++) {
      print "-";
    }
    print "+\n";
  }
}
?>