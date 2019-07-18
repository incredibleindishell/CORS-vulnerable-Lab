<?php 
session_start();
header( 'b0x-Powered-By: White beard Pirates 8-)' );
header('Access-Control-Allow-Origin: null');

header('Access-Control-Allow-Credentials: true');



if($_SESSION['logged2']!=true)
{
header('Location: login.php', true, 302);
exit;
}


echo '<div align=center style="margin: 30px;">Welcome, Fetch the HTTP response of this web page using CORS request and That\'s all \m/ because "null" "Origin" is not trustworthy</div>';



