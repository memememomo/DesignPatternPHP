<?php
require_once('Display.php');
class CountDisplay extends Display {
  public function __construct($impl) {
    parent::__construct($impl);
  }

  public function multi_display($times) {
    $this->open();
    for ($i = 0; $i < $times; $i++) {
      $this->myprint();
    }
    $this->close();
  }
}
?>