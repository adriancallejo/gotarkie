<?php
include 'include.php';

if(strlen(trim($_GET['url'])) != 0)
{
	$url = explode("/", trim($_GET['url'], "/"));

	$page = $url[0];
	$file = MAIN_DIR . "main/" . $page . ".php";
	
	if(file_exists($file))
	{
		$viewPage = $file;
	}
	else
	{
		$file = MAIN_DIR . "main/" . "404.php";
		$viewPage = $file;
	}
}
else
{
	$file =  MAIN_DIR . "main/" . "main.php";
	$viewPage = $file;
}

$moUri = new moUri();
include 'page.php';
?>