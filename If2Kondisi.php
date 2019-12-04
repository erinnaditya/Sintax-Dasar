<?php
	$bilangan = $_POST["bilangan"];
	if ($bilangan % 2 == 0) {
		echo "$bilangan aalah bilangan GENAP. <br/>";
	} else {
		echo "$bilangan adalah bilangan GANJIL.";
	}	
?>