<?php
require_once('MyPrint.php');
require_once('Banner.php');

class PrintBanner extends MyPrint {
  protected $banner = null;

  public function __construct($string) {
    $b = new Banner($string);
    $this->banner = $b;
  }

  public function print_weak() {
    $this->banner->show_with_paren();
  }

  public function print_strong() {
    $this->banner->show_with_aster();
  }
}
?>
