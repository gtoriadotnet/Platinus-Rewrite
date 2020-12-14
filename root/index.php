<?php

/*

Platinus Home Page

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../WebAssemblies/loader.php";

use Platinus\Web;

$page = new Web();

?>
<!--custom headers-->
<?php

$headers = $page->buildHeaders();

?>
<h1>Platinus</h1>
<h3>Yeah</h3>
<?php

$page->buildPage($headers);

?>