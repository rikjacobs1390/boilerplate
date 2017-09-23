<head>
    <meta charset="UTF-8">
    <title><?php echo $page__title; ?></title>
    
    <meta name="robots" content="<?php echo $page__robots; ?>">
    <meta name="description" content="<?php echo $page__description; ?>">
    <meta name="keywords" content="<?php echo $page__keywords; ?>">
    <meta name="author" content="<?php echo $page__author; ?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    
    <meta property="og:title" content="<?php echo $page__title; ?>"/>
    <meta property="og:site_name" content="<?php echo $page__sitename; ?>"/>
    <meta property="og:url" content="<?php echo $page__url; ?>"/>
    <meta property="og:description" content="<?php echo $page__description; ?>"/>
    <meta property="og:image" content="<?php echo $page__image; ?>"/>
	
    <?php
	/* FAVICON HERE */
	/*
		// FAVICON GENEREREN
	*/
	?>
    
	<?php
    /* FLASH OF UNSTYLED CONTENT */
	/*
		// Classe .fouc wordt op display none gezet voor alle elementen binnen de classe .js
		// de classe .js wordt toegevoegd aan het document
		// als het javascript file klaar is met laden wordt de .fouc ingefade
		// als JS uit staat is toch alles zichtbaar omdat de 
	*/
	?>
    <style type="text/css">
		.js .fouc { display: none; }
    </style>
	<script type="text/javascript">
		document.documentElement.className = 'js';
    </script>

</head>