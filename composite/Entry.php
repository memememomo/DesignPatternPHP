<?php
require_once('FileTreatmentException.php');

class Entry {
  public function getName() { }
  public function getSize() { }
  public function add($entry) {
    throw new FileTreatmentException();
  }
  public function printList($prefix) {
    if (!$prefix) {
      $this->printList("");
    }
  }
  public function __toString() {
    return $this->getName() . " (" . $this->getSize() . ")";
  }
}
?>