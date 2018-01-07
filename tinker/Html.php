<?php
class Html
{
	// TODO: Update this class with Logging and Tinker paths
	
  private $title;
  private $metas;
  private $stylesheets;
  private $startScripts;
  private $endScripts;

  public function __construct($title, $theme)
  {
    $this->metas = array();
    $this->stylesheets = array();
    $this->startScripts = array();
    $this->endScripts = array();

    $this->LoadTheme($theme);
    $this->SetTitle($title);
    echo "Constructing HTML";
  }

  public function LoadTheme($name)
  {
    // parse theme xml
    echo "Loading Theme...";
    $path_theme = 'conf/theme.xml';

    $path_theme = $_SERVER["DOCUMENT_ROOT"]."/tinkerphp/tinker/".$path_theme;
    echo $path_theme."<br>";

    if (file_exists($path_theme))
    {
      $xml = simplexml_load_file($path_theme);
      print_r($xml);
    }
    else
    {
      echo "Unable to load themes from: $path_theme<br>";
      echo "Theme file not found.<br>";
    }

  }

  public function SetTitle($title)
  {
    $this->title = $title;
  }

  public function AddMeta($meta)
  {
    array_push($this->metas, $meta);
  }

  public function AddStylesheets($link)
  {
    array_push($this->stylesheets, $link);
  }

  public function AddStartScript($script)
  {
    array_push($this->startScripts, $script);
  }

  public function AddEndScript($script)
  {
    array_push($this->endScripts, $script);
  }
}
?>
