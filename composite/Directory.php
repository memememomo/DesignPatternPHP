<?php
require_once('Entry.php');

class MyDirectory extends Entry {
  private $name;
  private $directory;

  public function __construct($name) {
    $this->name = $name;
    $this->directory = array();
  }

  public function getName() {
    return $this->name;
  }

  public function getSize() {
    $size = 0;
    foreach ($this->directory as $entry) {
      $size += $entry->getSize();
    }
    return $size;
  }

  public function add($entry) {
    array_push($this->directory, $entry);
    return $this;
  }

  public function printList($prefix) {
    print $prefix . "/" . $this . "\n";
    foreach ($this->directory as $entry) {
      $entry->printList($prefix . "/" . $this->name);
    }
  }
}
?>