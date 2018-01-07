<?php
require_once('Tinker.php');
require_once('View.php');

class Router {
	public static function Reroute($request)
	{
	    // Grabs the URI and breaks it apart in case we have querystring stuff
		$root = "/tinkerphp/htdocs";
		$request = substr($request, strlen($root));
		$request_uri = explode('?', $request, 2);
		Tinker::Log($request_uri[0]);

	    // Route it up!
	    switch ($request_uri[0]) {
	      // Home page
	        case '/':
	            require Tinker::GetControllers().'/home.php';
	            break;
	        // About page
	        case '/about':
	            require Tinker::GetViews().'/about.php';
	            break;
	        // Everything else
	        default:
	            //TODO: header('HTTP/1.0 404 Not Found');
	            require Tinker::GetViews().'/404.php';
	            break;
    	}
  	}
}
?>
