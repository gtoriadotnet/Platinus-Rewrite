<?php

/*

Allowed MD5 hash list

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../../WebAssemblies/loader.php";

$page = new Platinus\API();

if(isset($_GET["apiKey"]) && $_GET["apiKey"]=="2b4ba7fc-5843-44cf-b107-ba22d3319dcd"){
	$page->RespondJSON(array("data"=>["d4ade5b9e36fd63c3b27a2a747cc8d51"]));
}else{
	$page->InvokeError(403, "Unauthorized");
}

//EOF