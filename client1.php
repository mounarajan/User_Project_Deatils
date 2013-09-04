<?php
$a = $_POST['uname'];
$b = $_POST['password'];
$c = $_POST['ppassword'];
$con = mysql_connect("mysql.1freehosting.com","u594173455_local","hanuman"); 
mysql_select_db("u594173455_mini",$con);

//query selection
$query = "select * from reg where uname = '".$a."' and password = '".$b."'";

$s = mysql_query($query);
$r = mysql_fetch_array($s);
if($r)
{
$q = "update reg set password = '".$c."' where uname = $a";
}
elseif($q)
{
include("change.html");
}
else
{
include("login.html");
}
mysql_close($con);
?>