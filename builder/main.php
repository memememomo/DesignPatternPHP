<?php
require_once('Director.php');
require_once('TextBuilder.php');
require_once('HTMLBuilder.php');

mb_internal_encoding('utf-8');

if ($argv[1] == 'plain') {
  $textbuilder = new TextBuilder();
  $director = new Director($textbuilder);
  $director->construct();

  $result = $textbuilder->get_result();
  print "$result\n";
} else if ($argv[1] == 'html') {
  $htmlbuilder = new HTMLBuilder();
  $director = new Director($htmlbuilder);
  $director->construct();

  $filename = $htmlbuilder->get_result();
  printf("%sが作成されました。\n", $filename);
}
?>