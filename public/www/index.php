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
<div class="container plt-nav-container">
<img class="plt-nav-icon" src="<?= "//cdn." . $page->GetDomain() . "/IMG/Nav.png" ?>" alt="P"></img>
<ul class="plt-nav">
<li>
<a href="#">Navbar Item</a>
</li>
<li>
<a href="#">Navbar Item</a>
</li>
</ul>
</div>
</div>
<div class="container plt-body">
<h3>pog</h3>
</div>
<?php

$page->buildPage($headers);

?>