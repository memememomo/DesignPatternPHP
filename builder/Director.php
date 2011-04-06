<?php
class Director {
  protected $builder = null;

  public function __construct($builder) {
    $this->builder = $builder;
  }

  public function construct() {
    $this->builder->make_title("Greeting");
    $this->builder->make_string("朝から昼にかけて");
    $this->builder->make_items(array("おはようございます", "こんにちは"));
    $this->builder->make_string("夜に");
    $this->builder->make_items(array("こんばんは。", "おやすみなさい", "さようなら"));
    $this->builder->close();
  }
}
?>