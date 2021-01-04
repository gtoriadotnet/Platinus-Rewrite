<?php

/*

Platinus Api

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../../WebAssemblies/loader.php";

$page = new Platinus\API();

$page->InvokeError(403, "Unauthorized");

//EOF