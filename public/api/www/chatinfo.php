<?php

/*

Platinus Chat Filter Info API

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../../WebAssemblies/loader.php";

$page = new Platinus\API();

$page->RespondJSON(array("ChatFilter"=>"blacklist"));

//EOF