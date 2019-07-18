<?php 
session_start();


if($_SESSION['logged2']!=true)
	{
		header('Location: login.php', true, 302);
		exit;
	}


if(isset($_POST['logout']))
		{
			session_destroy();
			header('Location: login.php', true, 302);
		}

?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<STYLE>
BODY {
color: #ffffff;
background-color: #000000;
background-image: url(images/matrix2.gif);
background-repeat: repeat;
}

#title {
    font-size: 2em;
    padding-top: 5px;
	font-family: consolas, georgia, helvetica, times new roman, serif;
}


tr {
border-collapse: collapse;
}

td {
font-family: consolas, georgia, helvetica, times new roman, serif;
border-collapse: collapse;
}

table {
		margin-left:auto;
		margin-right:auto;
		BORDER: dashed 2px #333;
		BORDER-COLOR: #333333;
		BACKGROUND-COLOR: #191919;;
		color: #FFF;
}

A:link {
border: 1px;
	COLOR: red; TEXT-DECORATION: none
}
A:visited {
	COLOR: red; TEXT-DECORATION: none
}
A:hover {
	color: #97c3f5; TEXT-DECORATION: none
}
A:active {
	color: ; TEXT-DECORATION: none
}
</STYLE>

<script type="text/javascript">

    function lhook(id) {

       var e = document.getElementById(id);

       if(e.style.display == 'block')

          e.style.display = 'none';

       else

          e.style.display = 'block';

    }
</script>

<form method=POST>

		<input type=submit name=logout value="Logout"></form>
		
<div id="title" align=center>--==[[ Welcome to the CORS Misconfiguration Lab ]]==--</div>
<br>
Exercises:
<br>
<table width="90%"><tr><td>
<b><font color=#ff9933 size="3">1. Application Trust Arbitrary Origin: -</font></b></td></tr>
<tr><td style="background-color: #343440;">
<div align=center>--== <a href="#" onclick="lhook('info1');" style="border:1px;background:black;">Billu, Show Misconfiguration Info</a> ==--
</div>

<div id="info1" style="display:none;">
Application accept CORS request from any Origin. The code put the "Origin" value in HTTP response header "Access-Control-Allow-Origin". Now, this configuration will allow any script from any "Origin" to make CORS request to application. Web browser will perform standard CORS request checks and Script from malicious domain will be able to steal the data. </div></td></tr>
<tr><td>Link to Vulnerable Script - <a href="arbitrary_origin.php" target="_blank">arbitrary_origin.php</a></td></tr></table>
<br><br>
<table  width="90%" >
<tr><td>
<b><font color=#ff9933 size="3">2. Application has bad "regex" Implementation to check Trusted Origin : -</font></b> </td></tr>
<tr><td style="background-color: #343440; ">
<div align=center>--== <a href="#" onclick="lhook('info2');" style="border:1px;background:black;">Billu, Show Misconfiguration Info</a> ==--
</div>

<div id="info2" style="display:none;">
Application has CORS policy implemented and perform "Regex" check for whitelisted Domain/Sub-domains. In this scenario, application has weak regex implementation in code which just check for presence of domain name "b0x.com" anywhere in HTTP request "Origin" header. If HTTP header "Origin" has value "inb0x.com" or b0x.comlab.com, regex will mark it pass. This misconfiguration will lead to sharing of data over cross origin.
</div>
</td></tr>
<tr><td>
Link to Vulnerable Script - <a href="bad_regex.php" target="_blank">bad_regex.php</a></td></tr></table>
<br><br>
<table  width="90%">
<tr><td>
<b><font color=#ff9933 size="3">3. Application Trust "null" Origin: -</font></b> </td></tr>
<tr><td style="background-color: #343440;"> 
<div align=center>--== <a href="#" onclick="lhook('info3');" style="border:1px;background:black;">Billu, Show Misconfiguration Info</a> ==--
</div>

<div id="info3" style="display:none;">
In this scenario, application HTTP response header "Access-Control-Allow-Origin" is always set to "null". When user specify any value other than null, application does not process it and keep reflecting "null" in HTTP response. There are few tricks which allow an attacker to perform exploitation and can ex-filtrate data of victim using CORS request. </div></td></tr>
<tr><td>Link to Vulnerable Script - <a href="null_origin.php" target="_blank">null_origin.php</a>
</td></tr></table>  

