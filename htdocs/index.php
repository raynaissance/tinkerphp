<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/tinkerphp/config/config.php");
//echo $_SERVER["DOCUMENT_ROOT"]."/tinkerphp/htdocs/../config/config.php<br>";
$config = new Config();
$config->RequireTinker();

Tinker::Initialize();
Tinker::Route($_SERVER['REQUEST_URI']);
//$view = new View("My View");
?>
