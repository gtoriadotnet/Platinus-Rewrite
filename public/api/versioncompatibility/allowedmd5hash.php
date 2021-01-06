<?php

/*

Allowed MD5 hash list

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../../WebAssemblies/loader.php";

$page = new Platinus\API();
if(isset($_GET["apiKey"]) && $_GET["apiKey"]=="2b4ba7fc-5843-44cf-b107-ba22d3319dcd"){
	$page->RespondJSON(array("data"=>["b34accf35cbb12309230201c4c3572d3"]));
}else{
	$page->InvokeError(403, "Unauthorized");
}

//EOF