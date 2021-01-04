<?php

/*

Allowed MD5 hash list

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../../WebAssemblies/loader.php";

$page = new Platinus\API();
if(isset($_GET["apiKey"]) && $_GET["apiKey"]=="2b4ba7fc-5843-44cf-b107-ba22d3319dcd"){
	$page->RespondJSON(array("data"=>["c43f39212fe84e75836bfb9fa28c42a1"]));
}else{
	$page->InvokeError(403, "Unauthorized");
}

//EOF