<?php
class Config
{
  private $path_root = "";
  private $path_tinker = "";

  public function __construct()
  {
    $this->path_root = $_SERVER["DOCUMENT_ROOT"]."/tinkerphp/htdocs";
    $this->path_tinker = $this->path_root."/../tinker";

  }

  public function RequireTinker()
  {
    echo "Requiring Tinker classes...<br>";
    require_once($this->path_tinker."/View.php");
  }

  public function GetPathRoot()
  {
    return $this->path_root;
  }

  public function GetPathTinker()
  {
    return $this->path_tinker;
  }

}


?>
