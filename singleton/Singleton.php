<?php
class Singleton {
  static private $singleton = null;

  private function __construct() {
    print 'インスタンスを生成しました。' . "\n";
  }

  static public function getInstance() {
    if (!Singleton::$singleton) {
      Singleton::$singleton = new Singleton();
    }
    return Singleton::$singleton;
  }
}
?>