<?php
require_once('Iterator.php');

class BookShelfIterator extends MyIterator {
  private $bookShelf = null;
  private $index = 0;

  public function __construct($bookShelf) {
    $this->bookShelf = $bookShelf;
    $this->index = 0;
  }

  public function hasNext() {
    if ($this->index < $this->bookShelf->getLength()) {
      return true;
    } else {
      return false;
    }
  }

  public function next() {
    $book = $this->bookShelf->getBookAt($this->index);
    $this->index++;
    return $book;
  }
}
?>