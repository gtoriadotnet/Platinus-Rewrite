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
<div class="plt-header">
<div class="container">
<h1>Platinus</h1>
</div>
</div>
<div class="container">
<h3>Simple home page</h3>
</div>
<?php

$page->buildPage($headers);

?>