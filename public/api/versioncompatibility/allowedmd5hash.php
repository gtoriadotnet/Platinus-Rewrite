<?php

/*

Allowed MD5 hash list

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../../WebAssemblies/loader.php";

$page = new Platinus\API();

if(isset($_GET["apiKey"]) && $_GET["apiKey"]=="2b4ba7fc-5843-44cf-b107-ba22d3319dcd"){
	$page->RespondJSON(array("data"=>[md5(file_get_contents("D:\\2012lol\\platinus20162\\Release\\RobloxPlayerBeta.exe")),md5(file_get_contents("D:\\2012lol\\platinus20162\\Release\\RobloxPlayerBetaRaw.exe"))]));
}else{
	$page->InvokeError(403, "Unauthorized");
}

//EOF