<?php 

	// Business
	echo "<meta property='place:location:latitude' content='41.298947'/>";
	echo "<meta property='place:location:longitude' content='69.278513'/>";
	echo "<meta property='business:contact_data:street_address' content='улица Тараса Шевченко'/>";
	echo "<meta property='business:contact_data:locality' content='Ташкент'/>";
	echo "<meta property='business:contact_data:country_name' content='Узбекистан'/>";
	echo "<meta property='business:contact_data:postal_code' content='100123'/>";
	echo "<meta property='business:contact_data:email' content='basitkhan.wt@gmail.com'/>";
	echo "<meta property='business:contact_data:phone_number' content='+998 90 1741227'/>";
	echo "<meta property='business:contact_data:website' content='http://360creative.com'/>";
	
	// Mobile App
	echo "<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>";
	echo "<meta name='HandheldFriendly' content='True'>";
	echo "<meta name='MobileOptimized' content='320'>";
	echo "<link rel='apple-touch-icon-precomposed' sizes='512x512' href='favicon/favicon_512x512.png'>";
	echo "<link rel='apple-touch-icon-precomposed' sizes='256x256' href='favicon/favicon_256x256.png'>";
	echo "<link rel='apple-touch-icon-precomposed' sizes='128x128' href='favicon/favicon_128x128.png'>";
	echo "<link rel='apple-touch-icon-precomposed' sizes='64x64' href='favicon/favicon_64x64.png'>";
	echo "<link rel='apple-touch-icon-precomposed' sizes='48x48' href='favicon/favicon_48x48.png'>";
	echo "<link rel='apple-touch-icon-precomposed' sizes='32x32' href='favicon/favicon_32x32.png'>";
	echo "<link rel='apple-touch-icon-precomposed' sizes='24x24' href='favicon/favicon_24x24.png'>";
	echo "<link rel='shortcut icon' href='favicon/favicon_512x512.png'>";
	echo "<link rel='apple-touch-startup-image' href=''>";
	echo "<meta name='apple-mobile-web-app-status-bar-style' content='favicon/favicon_512x512.ico'>";

	// Other
	echo "<meta name='robots' content='index,follow'/>";
	
	echo '<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">';


	function getMainPageTags()
	{
		echo "<title>360 creative - branding agency</title>";
		echo "<meta name='description' content=''>";
		echo "<meta name='keywords' content=''>";
		// Facebook
		echo "<meta property='og:title' content='Брендинговое агентство 360 creative'>";
		echo "<meta property='og:description' content=''>";
		echo "<meta property='og:image' content=''>";
		echo "<meta property='og:url' content='360creative.com'>";
		echo "<meta name='og:site_name' content='360 creative'>";

		// Twitter
		echo "<meta name='twitter:card' content='summary'/>"; 
		echo "<meta name='twitter:site' content='Название сайта'/>";
		echo "<meta name='twitter:title' content='Название страницы'>";
		echo "<meta name='twitter:description' content='Описание'/>";
		echo "<meta name='twitter:creator' content='автор'/>";
		echo "<meta name='twitter:image:src' content='https://website.com/image250X250.png'/>";
		echo "<meta name='twitter:domain' content='website.com'/>";
	}

	function getProjectMetaTags($title, $keywords, $description, $logo_url , $project_url)
	{	
		echo "<title>$title</title>";
		echo "<meta name='description' content='$description'>";
		echo "<meta name='keywords' content='$keywords'>";

		// Facebook
		echo "<meta property='og:title' content='$title'>";
		echo "<meta property='og:description' content='$description'>";
		echo "<meta property='og:image' content='$logo'>";
		echo "<meta property='og:url' content='360creative.com/$project_url'>";
		echo "<meta name='og:site_name' content='360 creative'>";
		
		// Twitter
		echo "<meta name='twitter:card' content='summary'/>"; 
		echo "<meta name='twitter:site' content='360 creative'/>";
		echo "<meta name='twitter:title' content='$title'>";
		echo "<meta name='twitter:description' content='$description'/>";
		echo "<meta name='twitter:image:src' content='$logo'/>";
		echo "<meta name='twitter:domain' content='360creative.com'/>";

		// Google plus
		echo "<meta itemprop='name' content='360 creative'/>";
		echo "<meta itemprop='description' content='$description'/>";
		echo "<meta itemprop='image' content='$logo'/>";
	}
?>