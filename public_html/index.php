<?php
/**
 @ In the name Of Allah
**/

// if personal config exist, require it
if ( file_exists( __DIR__ . '/config.me.php') )
	require_once( __DIR__ . '/config.me.php');
// elseif config exist, require it else show related error message
elseif ( file_exists( __DIR__ . '/config.php') )
	require_once( __DIR__ . '/config.php');
else
{   // A config file doesn't exist
	exit("<p>There doesn't seem to be a <code>config.php</code> file. I need this before we can get started.</p>");
}
// if Saloos exist, require it else show related error message
if ( file_exists( '../../saloos/autoload.php') )
{
	require_once( '../../saloos/autoload.php');
}
else
{   // A config file doesn't exist
	exit("<p>We can't find <b>Saloos</b>! Please contact administrator!</p>");
}
?>