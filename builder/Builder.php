<?php
class Builder {
  public function make_title($title) {
    die("make_title() is abstract.");
  }

  public function make_string() {
    die("make_string() is abstract.");
  }

  public function make_items() {
    die("make_items() is abstract.");
  }

  public function close() {
    die("close() is abstract.");
  }
}
?>