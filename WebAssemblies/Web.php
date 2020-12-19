<?php

/*

Platinus Web

*/

namespace Platinus;

class Web {
	function __construct() {
		ob_start();
	}
	
	function GetDomain() {
		$serverHost = $_SERVER['HTTP_HOST'];
		preg_match("/[^\.\/]+\.[^\.\/]+$/", $serverHost, $regexMatch);
		return $regexMatch[0];
	}
	
	public function buildHeaders() {
		$contents = ob_get_contents();
		ob_end_clean();
		return $contents;
	}
	
	public function buildPage($headers) {
		$contents = ob_get_contents();
		ob_end_clean();
		echo "<!DOCTYPE html>\n<html>\n<head>\n<title>Platinus</title>\n<link rel=\"stylesheet\" href=\"//cdn." . Web::GetDomain() . "/CSS/Global/fetch/\">\n$headers</head>\n<body>\n$contents</body>\n</html>";
	}
}

?>