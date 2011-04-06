<?php
require_once('BookShelf.php');
require_once('Book.php');

$bookShelf = new BookShelf(4);
$bookShelf->appendBook(new Book('Around the World in 80 Days'));
$bookShelf->appendBook(new Book('Bible'));
$bookShelf->appendBook(new Book('Cinderella'));
$bookShelf->appendBook(new Book('Daddy-Long-Legs'));
$it = $bookShelf->iterator();
while ($it->hasNext()) {
  $book = $it->next();
  print $book->getName() . "\n";
}
?>