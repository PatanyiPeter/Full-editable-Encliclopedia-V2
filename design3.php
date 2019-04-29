<?php 
	unlink("style.css");
	copy('designes/blackdesign.css', "style.css");
	include("admin-place.php");
 ?>