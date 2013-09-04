<?php
$a = $_POST['password'];
$b = $_POST['password'];
$con = mysql_connect("mysql.1freehosting.com","u594173455_local","hanuman"); 
mysql_select_db("u594173455_mini",$con);

//query selection
$query = "select * from login where user_name = '".$a."' and password = '".$b."'";

$s = mysql_query($query);
$r = mysql_fetch_array($s);
if($s)
{
include("r3.html");
}
else
{
echo "enter correct username and password";
}
?>