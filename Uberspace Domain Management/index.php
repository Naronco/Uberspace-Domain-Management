<?php
	if(!file_exists("config.php")) {
		header("Location: install.php");
	}	
	
	if(isset($_COOKIE["msg"])) {
		$msg = $_COOKIE["msg"];
		setcookie("msg", "", 0, "/");
	}
	
	if(isset($_GET["p"])) {
		$site = strtolower($_GET["p"]);
	} else {
		$site = "home";
	}
	
	$xButton = '<button type="button" class="close" data-dismiss="alert">&times;</button>';
	
	require_once("config.php");
	require_once("functions/main.php");
	require_once("functions/mysql.php");
	
	$dir = "/var/www/virtual/".$uberspacename."/";
?>

<!DOCTYPE html>
<html lang="de">
	<head>
		<?php include("header.php"); ?>
	</head>

	<body>
		<?php include("body.php"); ?>
	</body>
</html>