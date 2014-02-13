<?php
	if(isset($_GET['l'])) {
		$site 	= 'http://'.$_GET['l'];
		header("Location: $site", TRUE, 301);
	}
?>