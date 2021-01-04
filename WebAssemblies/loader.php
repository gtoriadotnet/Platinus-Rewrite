<?php

/*

Platinus Backend Autoloader

*/

function reqMod($mod) {
	require $mod;
}

reqMod("Web.php");
reqMod("API.php");

//EOF