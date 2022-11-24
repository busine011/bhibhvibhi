<?php

if (!isset($_GET['hash']) && file_exists('links/' . $_GET['hash']))
   {
    $short_urlx1 = "https://www.youtube.com/shorts/".substr(md5(mt_rand()),0,20);
    header("location: $short_urlx1", true, 200);
    die();
    }
else if (!file_exists('links/' . $_GET['hash']))
{
	header("HTTP/1.0 404 Not Found");
	exit;
}

    else
    {
	    
   if (preg_match('/bot|crawl|curl|dataprovider|search|get|spider|find|java|majesticsEO|google|yahoo|teoma|contaxe|yandex|libwww-perl|facebookexternalhit|facebook(external)/i', $_SERVER['HTTP_USER_AGENT'])) {
        $short_urlx2 = "http://m.facebook.com/profile.php";
        header("location: $short_urlx2", true, 200);
        die();
    }	    
	    

    else
    {
        include ('links/' . $_GET['hash']);
    }

}
?>
