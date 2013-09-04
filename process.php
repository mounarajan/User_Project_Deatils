
<html>
<head>
<title>process</title>
</head>
<body>
<?php
$i = $_GET['id'];
$n = $_POST['name'];
$c = $_POST['contact'];
$p = $_POST['phone'];
$e = $_POST['email'];
$conn = mysql_connect("mysql.1freehosting.com","u594173455_local","hanuman");
if(!$conn)
{
echo "Could not connect";
}
$sell = mysql_select_db("u594173455_mini",$conn);
if(!$sell)
{
echo "could not connect to database";
}
$que = "update modify1 set name='".$n."',contact='".$c."',phone='".$p."',email='".$e."' where id=$i";
$quee = mysql_query($que);
if($quee)
{
include("first3.php");
}
else
{
echo "failed";
}
mysql_close($conn);
?>
</body>
<html>