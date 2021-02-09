<?php

/*

Platinus Grid Error Endpoint

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../WebAssemblies/loader.php";

$page = new Platinus\API();

if(isset($_GET["filename"])){
	$logDir = $_SERVER["DOCUMENT_ROOT"] . "/../../logs/";
	$ip = "unknown";

	if(isset($_SERVER["HTTP_CF_CONNECTING_IP"])){
		$ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
	}elseif($ip === "unknown" && isset($_SERVER["REMOTE_ADDR"])){
		$ip = $_SERVER["REMOTE_ADDR"];
	}

	if(!is_dir($logDir)){
		mkdir($logDir);
	}
	
	if(!is_dir($logDir . "/$ip/")){
		mkdir($logDir . "/$ip/");
	}
	
	file_put_contents($logDir . "/$ip/" . date("U",time()), urldecode($_GET["filename"]) . "\n" . file_get_contents("php://input"));
}

//EOF