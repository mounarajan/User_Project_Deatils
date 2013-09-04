<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css3.css" rel="stylesheet" type="text/css" >
<link href="css1.css" rel="stylesheet" type="text/css" >

</head>

<body>
<div id = "first" title ="Registration Deatils">

</div>
<div class="dialog" title="Edit Client">
<div id="head">
<div class="wrapper">
<div class="logo-cont">
<h2 id="logo">
<a class="ie6fix" href="first.html">Advanced Client Portal</a>
</h2>
</div>
<div class="navigation">
<ul class="main_nav dropdown">
<li><a href="index.html">Home</a>
</li>
<li><a href="#">Actions</a>
<ul>
<li>
<a class="new-client-button model" href="#">New Client</a>
</li>
<li>
<a class="new-project-button model" href="#">New project</a>
</li>
<li>
<a class="new-invoice-button model" href="#">New Invoice</a>
</li>
<li>
<a class="new-admin-button model" href="#">New Admin</a>
</li>
<li>
<a class="new-admin-button model" href="#">Edit My Info</a>
</li>
<li>
<a class="change-pass-button model" href="#">Change Password</a>
</li>
</ul>
</li>
<li>
<a href="index.html">Logout</a>
</li>
</ul>
<a class="resize_button"></a>
</div>
</div>
</div>
<div id="modal" class="jqmWindow jqmID1">
<div id="modal-body"></div>
</div>
<div id="content" class="clearfix">
<div class="clear"></div>
<div class="tmp"></div>
<div id="alert" class>
</div>

<div id="page-content-outer">
<div id="page-content" class="wrapper content admin">
<div class="info-bar">
<h1 class="title">Deatils of your Registration</h1>
</div>
<?php
$u = $_POST['uname'];
$p = $_POST['password'];
$c = $_POST['company'];
$cc = $_POST['city'];
$d = $_POST['dob'];
$con = mysql_connect("mysql.1freehosting.com","u594173455_local","hanuman");
mysql_select_db("u594173455_mini",$con);
mysql_query("insert into reg(uname,password) values ('".$u."','".$p."')");
mysql_close($con);

echo "You have successfully registered<br>"; 
echo "<br>Deatils are given below"; 
echo "<br>Your User Name :" .$u; 
echo "<br>Your Password :" .$p; 
echo "<br>Your Company :" .$c; 
echo "<br>Your City :" .$cc; 
echo "<br>Your Date of Birth :" .$d; 

?>
<br>
<center>
<a href="index.html">Click here to login</a>
</center>
<div class ="innner">




</div>

</div>
</body>
</html>
