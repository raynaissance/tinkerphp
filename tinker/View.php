<?php
require_once("Html.php");
require_once("Layout.php");

class View {
  private $layout;
  private $html;

	public function __construct()
	{

	}

  public function Initialize($title, $theme=null, $layout=null)
  {
    // TODO: check that theme.xml exists & log it
    Tinker::Log("Constructing Base view...");
    $this->html = new Html($title, $theme);
    if(!empty($layout))
    {
      $this->layout = new Layout($layout);
    }
  }

  public function AddModule($url)
  {

  }
}
?>
