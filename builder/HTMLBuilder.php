<?php
require_once('Builder.php');

class HTMLBuilder extends Builder {
  protected $filename = null;
  protected $writer = null;

  public function make_title($title) {
    $this->filename = $title . ".html";

    $fp = fopen($this->filename, "w");
    if (!is_resource($fp)) {
      die("can't open file");
    }

    $this->writer = $fp;

    fputs($fp, "<html><head><title>" . $title . "</title></head><body>\n");
    fputs($fp, "<h1>" . $title . "</h1>");
  }

  public function make_string($str) {
    $fp = $this->writer;
    fputs($fp, "<p>" . $str . "</p>");
  }

  public function make_items($items) {
    $fp = $this->writer;
    fputs($fp, "<ul>\n");
    foreach ($items as $item) {
      fputs($fp, "<li>" . $item . "</li>\n");
    }
    fputs($fp, "</ul>\n");
  }

  public function close() {
    $fp = $this->writer;
    fputs($fp, "</body></html>\n");
    fclose($fp);
  }

  public function get_result() {
    return $this->filename;
  }
}
?>