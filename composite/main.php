<?php
require_once('Directory.php');
require_once('File.php');

try {
  print "Making root entries...\n";
  $rootdir = new MyDirectory("root");
  $bindir = new MyDirectory("bin");
  $tmpdir = new MyDirectory("tmp");
  $usrdir = new MyDirectory("usr");
  $rootdir->add($bindir);
  $rootdir->add($tmpdir);
  $rootdir->add($usrdir);
  $bindir->add(new File("vi", 10000));
  $bindir->add(new File("latex", 20000));
  $rootdir->printList('');

  print "\n";
  print "Making user entries...\n";
  $yuki = new MyDirectory("yuki");
  $hanako = new MyDirectory("hanako");
  $tomura = new MyDirectory("tomura");
  $usrdir->add($yuki);
  $usrdir->add($hanako);
  $usrdir->add($tomura);
  $yuki->add(new File("diary.html", 100));
  $yuki->add(new File("Composite.java", 200));
  $hanako->add(new File("memo.tex", 300));
  $tomura->add(new File("game.doc", 400));
  $tomura->add(new File("junk.mail", 500));
  $rootdir->printList('');
} catch (Exception $e) {
  echo $e;
}
?>