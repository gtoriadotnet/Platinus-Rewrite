<?php

/*

Allowed MD5 hash list

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../../WebAssemblies/loader.php";

$page = new Platinus\API();

if(isset($_GET["apiKey"]) && $_GET["apiKey"]=="2b4ba7fc-5843-44cf-b107-ba22d3319dcd"){
	$page->RespondJSON(array("data"=>["0.235.0pcplayer"]));
}else{
	$page->InvokeError(403, "Unauthorized");
}

//EOF