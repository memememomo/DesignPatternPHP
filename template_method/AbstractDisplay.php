<?php
class AbstractDisplay {
  public function open() { }
  public function myprint() { }
  public function close() { }
  public function display() {
    $this->open();
    for ($i = 0; $i < 5; $i++) {
      $this->myprint();
    }
    $this->close();
  }
}
?>