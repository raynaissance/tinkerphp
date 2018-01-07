<?php

// Require Tinker specific files
require_once("router.php");

class Tinker {

	private static $instance = null;

	private function __construct()
	{

	}

	public static function Initialize()
	{
		// TODO: Set the URI variables by parsing config xml and adding paths to GLOBALS array
		$GLOBALS['uri_views'] = "/views";
		$GLOBALS['uri_controllers'] = "/controllers";
	}

	public static function getInstance()
	{
		if (self::$instance == null)
		{
			self::$instance = new Tinker();
		}

		return self::$instance;
	}

	public static function Route($request)
	{
		self::Log("Routing request: $request");
		Router::Reroute($request);
	}

	public static function GetViews()
	{
		return $_SERVER['DOCUMENT_ROOT'] . '/tinkerphp/htdocs' . $GLOBALS['uri_views'];
		//return $_SERVER['DOCUMENT_ROOT'] . '/tinkerphp/htdocs/views';
	}

	public static function GetControllers()
	{
		return $_SERVER['DOCUMENT_ROOT'] . '/tinkerphp/htdocs' . $GLOBALS['uri_controllers'];
	}

	public static function GetLogUri()
	{
		return '/logs';
	}

	public static function Log($statement)
	{
		$sessionID = 2345;
		$path = self::GetLogUri()."/$sessionID.log";
		echo $statement .'</br>';
		/*if ($file = fopen($path))
		{
			// TODO: print log statement to file
		}
		else
		{
			die ("TinkerPHP Logging cannot open log file: ");
		}*/
	}
}
?>
