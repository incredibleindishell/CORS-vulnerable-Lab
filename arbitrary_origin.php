<?php 
session_start();
header( 'b0x-Powered-By: White beard Pirates 8-)' );

if($_SESSION['logged2']!=true)
	{
		header('Location: login.php', true, 302);
		exit;
	}

if (isset($_SERVER['HTTP_ORIGIN']))
	{
		header("Access-Control-Allow-Origin: ".$_SERVER['HTTP_ORIGIN']."");
		header('Access-Control-Allow-Credentials: true');
	}

echo '<div align=center style="margin: 30px;">Welcome, Fetch the HTTP response of this web page using CORS request and That\'s all  \m/. Lesson learned, never trust arbitrary "Origin"</div>';


?>