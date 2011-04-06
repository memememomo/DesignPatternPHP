<?php
require_once('AbstractDisplay.php');

class CharDisplay extends AbstractDisplay {
  private $ch;

  public function __construct($ch) {
    $this->ch = $ch;
  }

  public function open() {
    print "<<";
  }

  public function myprint() {
    print $this->ch;
  }

  public function close() {
    print ">>\n";
  }
}
?>