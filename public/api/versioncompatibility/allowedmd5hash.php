<?php

/*

Allowed MD5 hash list

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../../WebAssemblies/loader.php";

$page = new Platinus\API();
if(isset($_GET["apiKey"]) && $_GET["apiKey"]=="2b4ba7fc-5843-44cf-b107-ba22d3319dcd"){
	$page->RespondJSON(array("data"=>["9509c1c066d97a320a0d778c6781105a"]));
}else{
	$page->InvokeError(403, "Unauthorized");
}

//EOF