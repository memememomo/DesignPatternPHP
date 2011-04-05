<?php

class Banner {
  protected $string = null;

  public function __construct($string) {
    $this->string = $string;
  }

  public function show_with_paren() {
    printf("(%s)\n", $this->string);
  }

  public function show_with_aster() {
    printf("*%s*\n", $this->string);
  }
}

?>
