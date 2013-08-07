<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

$routes = array(
	0 => array(
		"pattern"	  => "/^stopsagency/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "stopsByAgency",
		"params"	  => array(segment(1))
	),
	1 => array(
		"pattern"	  => "/^agencies/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "agencies",
		"params"	  => array()
	),
	2 => array(
		"pattern"	  => "/^routes/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "routes",
		"params"	  => array(segment(1))
	),
	3 => array(
		"pattern"	  => "/^stops/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "stops",
		"params"	  => array(segment(1))
	),
	4 => array(
		"pattern"	  => "/^agency/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "agency",
		"params"	  => array(segment(1))
	),
	5 => array(
		"pattern"	  => "/^route/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "route",
		"params"	  => array(segment(1))
	),
	6 => array(
		"pattern"	  => "/^stop/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "stop",
		"params"	  => array(segment(1))
	),
	7 => array(
		"pattern"	  => "/^search/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "search",
		"params"	  => array(segment(1))
	),
	8 => array(
		"pattern"	  => "/^near/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "near",
		"params"	  => array(segment(1))
	),
	9 => array(
		"pattern"	  => "/^trip/",
		"application" => "api",
		"controller"  => "api",
		"method"	  => "trip",
		"params"	  => array(segment(1), segment(2))
	)
);
