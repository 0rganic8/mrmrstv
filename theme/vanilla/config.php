<?php

  //   $global_root = $_SERVER['DOCUMENT_ROOT'];

  $timestamp = time();
  if(date('D', $timestamp) === 'Sun') {
    // this will eventually be a child theme of vanilla
      $theme = 'vanilla';
  } else {
      $theme = 'vanilla';
  }
  //used for the css / head files
  $theme_root = 'theme/' . $theme;


  // page specific php? probably pick up the url and then use the heading according to the page - not very dynamic if we add more pages
  //user input required
	$website_aside_heading1 = "aside heading1";
	$website_aside_heading2 = "aside heading2";
	$website_aside_heading3 = "aside heading3";

	// get from bot
	$stream_latest_donator = "highest donation";
	$stream_latest_donator_amount = "highest donation";
	$stream_latest_follower = "latest follower";

  // page specific - will need php to determine which page is currently being displayed
	$website_page_heading = "Page heading";

?>
