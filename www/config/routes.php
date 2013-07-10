<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

$routes = array(
	0 => array(
		"pattern"	  => "/^agencies/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "agencies",
		"params"	  => array()
	),
	1 => array(
		"pattern"	  => "/^routes/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "routes",
		"params"	  => array(segment(1))
	),
	2 => array(
		"pattern"	  => "/^stops/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "stops",
		"params"	  => array(segment(1))
	),
	3 => array(
		"pattern"	  => "/^agency/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "agency",
		"params"	  => array(segment(1))
	),
	4 => array(
		"pattern"	  => "/^route/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "route",
		"params"	  => array(segment(1))
	)
);
