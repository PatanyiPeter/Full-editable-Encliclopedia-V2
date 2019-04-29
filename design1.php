<?php 
	unlink("style.css");
	copy('designes/reddesign.css', "style.css");
	include("admin-place.php");
 ?>