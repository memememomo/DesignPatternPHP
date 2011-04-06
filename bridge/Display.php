<?php
class Display {
  protected $impl = null;

  public function __construct($impl) {
    $this->impl = $impl;
  }

  public function open() {
    $this->impl->raw_open();
  }

  public function myprint() {
    $this->impl->raw_print();
  }

  public function close() {
    $this->impl->raw_close();
  }

  public function display() {
    $this->open();
    $this->myprint();
    $this->close();
  }
}
?>