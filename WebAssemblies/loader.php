<?php

/*

Platinus Backend Autoloader

*/

$webAssemblies = $_SERVER["DOCUMENT_ROOT"] . "/../WebAssemblies/";

function reqMod($mod) {
	global $webAssemblies;
	require $webAssemblies . $mod;
}

reqMod("Web.php");

?>