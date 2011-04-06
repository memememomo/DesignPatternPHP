<?php
class Book {
  private $name = null;

  public function __construct($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }
}
?>