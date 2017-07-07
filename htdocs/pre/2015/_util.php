<?php
	error_reporting(0);
	// root path
	$rP = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]. '/';
	$current = str_replace("/","",$_SERVER["REQUEST_URI"]);
	if (preg_match("/news/", $current)){
		$current = "news";
	}
	if (preg_match("/info/", $current)){
		$current = "event info";
	}
	if (preg_match("/lineup/", $current)){
		$current = "line up";
	}
	$current = strtoupper($current);
?>