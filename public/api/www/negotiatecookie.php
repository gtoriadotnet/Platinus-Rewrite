<?php

/*

Platinus Login Negotiation

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../../WebAssemblies/loader.php";

$page = new Platinus\API();

$domain = "HTTP_RBXAUTHENTICATIONNEGOTIATION";

if(isset($_SERVER[$domain]) && $_SERVER[$domain] == "www.platinus.local" && isset($_GET["suggest"])){
	
}else{
	$page->InvokeError(403, "Unauthorized");
}

//EOF