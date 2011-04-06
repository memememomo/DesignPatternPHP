<?php
require_once('Builder.php');

class TextBuilder extends Builder {
  protected $buffer = null;

  public function make_title($title) {
    $this->buffer  = "======================================\n";
    $this->buffer .= " 『" . $title . "』\n";
    $this->buffer .= "\n";
  }

  public function make_string($str) {
    $this->buffer .= "* " . $str . "\n";
    $this->buffer .= "\n";
  }

  public function make_items($items) {
    foreach ($items as $item) {
      $this->buffer .= ' ・' . $item . "\n";
    }
    $this->buffer .= "\n";
  }

  public function close() {
    $this->buffer .= "======================================\n";
  }

  public function get_result() {
    return $this->buffer;
  }
}
?>