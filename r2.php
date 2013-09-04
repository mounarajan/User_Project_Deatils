<?php
$a = $_POST['uname'];
$b = $_POST['password'];
$con = mysql_connect("mysql.1freehosting.com","u594173455_local","hanuman"); 
mysql_select_db("u594173455_mini",$con);

//query selection
$query = "select * from reg where uname = '".$a."' and password = '".$b."'";

$s = mysql_query($query);
$r = mysql_fetch_array($s);
if($r)
{
include("r3.html");
}
else
{
echo "enter correct username and password";
}
mysql_close($con);
?>