<?php 
session_start();
include('c0nnection.php');

if(isset($_POST['login']))
	{
	
     $uname=mysqli_real_escape_string($conn,@$_POST['username']);
     $pass=mysqli_real_escape_string($conn,@$_POST['password']);
     $run='select * from auth where username=\''.$uname.'\' and  password=\''.$pass.'\'';
     $result = mysqli_query($conn, $run);
 if (mysqli_num_rows($result) > 0) {

 $row = mysqli_fetch_assoc($result);
        $_SESSION['logged2']=true;
       
		     header('Location: index.php', true, 302);
	  }
	  
else
{
echo "<script>alert('Are you sure, username/password was correct??');</script>";
}
}

echo '<html>
<head>
<link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLfLXmLeMSTt0jOXREfgvdp8IYWnE9_t49PpAiJNvwHTqnKkL4" rel="icon" type="image/x-icon"/>
</script>
<title>--==[[Mannu Sh3LL]]==--</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<STYLE>
body {
background: url(images/head.jpg);
	background-size: 100% 700px;
font-family: Tahoma;
color: white;
}
input {
border			: solid 2px ;
border-color		: black;
BACKGROUND-COLOR: #444444;
font: 8pt Verdana;
color: white;
}
submit {
BORDER:  buttonhighlight 2px outset;
BACKGROUND-COLOR: Black;
width: 30%;
color: #FFF;
}
#t input[type=\'submit\']{
	COLOR: White;
	border:none;
	BACKGROUND-COLOR: black;
}
#t input[type=\'submit\']:hover {
	
	BACKGROUND-COLOR: #ff9933;
	color: black;
	
}
tr {
BORDER: dashed 1px #333;
color: #FFF;
}
td {
BORDER: dashed 0px ;
}
.table1 {
BORDER: 0px Black;
BACKGROUND-COLOR: Black;
color: #FFF;
}
.td1 {
BORDER: 0px;
BORDER-COLOR: #333333;
font: 7pt Verdana;
color: Green;
}
.tr1 {
BORDER: 0px;
BORDER-COLOR: #333333;
color: #FFF;
}
table {
BORDER: dashed 2px #333;
BORDER-COLOR: #333333;
BACKGROUND-COLOR: #191919;;
color: #FFF;
}
textarea {
border			: dashed 2px #333;
BACKGROUND-COLOR: Black;
font: Fixedsys bold;
color: #999;
}
A:link {
border: 1px;
	COLOR: red; TEXT-DECORATION: none
}
A:visited {
	COLOR: red; TEXT-DECORATION: none
}
A:hover {
	color: White; TEXT-DECORATION: none
}
A:active {
	color: white; TEXT-DECORATION: none
}
</STYLE>
<script type="text/javascript">
<!--
    function lhook(id) {
       var e = document.getElementById(id);
       if(e.style.display == \'block\')
          e.style.display = \'none\';
       else
          e.style.display = \'block\';
    }
//-->
</script>
';


if(@$_SESSION['logged2']!=true)
{
	$_SESSION['logged2']='';
}
if($_SESSION['logged2']===true)
{
	header('Location: index.php', true, 302);
}


else 
{
echo '<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >
			
         <td width="100%" align=center valign="top" rowspan="1">
           <font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ Mis-confi</font><font color=white size=5 face="comic sans ms"><b>gured CORS </font><font color=green size=5 face="comic sans ms"><b>Policy  Lab]]==--</font><br>
			<font color=#ff9933 size=3 face="comic sans ms"><b>--==[[ With </font><font color=white size=3 face="comic sans ms"><b>Love From IndiShell</font><font color=green size=3 face="comic sans ms"><b> Crew]]==--</font>
		   <div class="hedr"> 
        <td height="10" align="left" class="td1"></td></tr><tr><td 
        width="100%" align="center" valign="top" rowspan="1"><font 
        color="red" face="comic sans ms"size="1"> 
        <font color=#ff9933> 
        ##########################################</font><font color=white>#############################################</font><font color=green>#############################################</font><br><font color=white>
        -==[[Greetz to]]==--</font><br> <font color=#ff9933>Guru ji zero, Code breaker ICA, root_devil, google_warrior, INX_r0ot, Darkwolf indishell, Baba Silent poison India, Magnum sniper, 3thicalnoob Indishell, Reborn India, L0rd Crus4d3r, cool toad, <br>
Hackuin, Alicks, mike waals, cyber gladiator, Cyber Ace, Golden boy INDIA, d3, rafay baloch, nag256,
Ketan Singh, AR AR, saad abbasi, Minhal Mehdi, Raj bhai ji, Hacking queen, D2, Bikash Dash and rest of TEAM INDISHELL<br>
<font color=white>--==[[Love to]]==--</font><br># My Father, my Ex Teacher, cold fire hacker, Mannu, ViKi, Ashu bhai ji, Soldier Of God, Bhuppi, Gujjar PCP,
Mohit, Ffe, Shardhanand, Budhaoo, Jagriti, Hacker fantastic, Jennifer Arcuri, Thecolonial and Don(Deepika kaushik) <br>
        <b> 
        <font color=#ff9933> 
        ##########################################</font><font color=white>#############################################</font><font color=green>#############################################</font>
						
           </table>
       </table> 
<div align=center style="margin:30px 0px 0px 0px;">


Login 

<br><br>
<form method=POST>
Username <input type=text name=username value="ace">	&nbsp Password <input type=password name=password value="fire"><br><br>
<input type=submit name=login value="Let me In =))">
</form>';
}


?>
<style type="text/css">#cot_tl_fixed{background-color:black;position:fixed;bottom:0px;font-Asize:50px;left:0px;padding:3px 0;clip:_top:expression(document.documentElement.scrollTop+document.documentElement.clientHeight-this.clientHeight);_left:expression(document.documentElement.scrollLeft + document.documentElement.clientWidth - offsetWidth);}</style>
<span style="color: white;">
<div id="cot_tl_fixed"><marquee>Coded By:- 1046 @ IndiShell Lab</marquee></div></span>
