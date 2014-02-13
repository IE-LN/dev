<?php
	$site 	= $_GET['l'];
	$sites 	= array(
		'facebook'=>'https://www.facebook.com/ElectricDaisyCarnivalMexico',
		'buy-now'=>'http://www.ticketmaster.com.mx/event/14004B84FBEDAE5C?did=ehr0315a',
		'instagram'=>'http://instagram.com/edc_lasvegas',
		'twitter'=>'https://twitter.com/insomniacevents',
		'google'=>'https://plus.google.com/+InsomniacEvents'
	);
	
	$url	= $sites[$site];
	header("Location: $url", TRUE, 301);
?>