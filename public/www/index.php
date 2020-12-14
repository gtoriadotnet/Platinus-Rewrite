<?php

/*

Platinus Home Page

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../WebAssemblies/loader.php";

$page = new Platinus\Web();

?>
<!--custom headers-->
<?php

$headers = $page->buildHeaders();

?>
<h1>Platinus</h1>
<h3>Simple home page</h3>
<?php

$page->buildPage($headers);

?>