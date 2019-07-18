<?php
header('X-Frame-Options: SAMEORIGIN');
header( 'Server: Testing only' );
header( 'X-Powered-By: White beard Pirates 8-)' );

ini_set( 'session.cookie_httponly', 1 );
//error_reporting(0);
$conn = mysqli_connect("127.0.0.1","billu","b0x_billu","ica_lab");

// Check connection
if (mysqli_connect_errno())
  {
  echo "connection to SQL server failed ->  " . mysqli_connect_error();
  }


?>