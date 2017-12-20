<?php
class Layout {
  private $urls;

  public function __construct($name)
  {
    $this->LoadLayout($name);
  }


  public function LoadLayout($name)
  {
    $this->urls = array();


  }
}
?>
