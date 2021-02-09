<?php

/*

Platinus Asset

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../WebAssemblies/loader.php";

$page = new Platinus\API();

function isGetSet($needle)
{
	return isset($_GET[$needle]) && $_GET[$needle] == (int)$_GET[$needle];
}

if(isGetSet("id"))
{
	$url = "https://assetdelivery.roblox.com/v1/asset/?id=" . $_GET["id"];
	if(isGetSet("version"))
	{
		$url = $url . "&version=" . $_GET["version"];
	}
	header("location: $url");
	exit;
}
else
{
	$page->InvokeError(403, "Unauthorized");
}

//EOF