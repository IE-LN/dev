<?php
	if(isset($_GET['l'])) {
		$site 	= $_GET['l'];
		header("Location: $site", TRUE, 301);
	}
?>