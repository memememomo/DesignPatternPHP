<?php
require_once('Aggregate.php');
require_once('BookShelfIterator.php');

class BookShelf extends Aggregate {
  private $books = null;
  private $last = 0;

  public function __construct($maxsize) {
    $this->books = array();
  }

  public function getBookAt($index) {
    return $this->books[$index];
  }

  public function appendBook($book) {
    $this->books[$this->last] = $book;
    $this->last++;
  }

  public function getLength() {
    return $this->last;
  }

  public function iterator() {
    return new BookShelfIterator($this);
  }
}
?>