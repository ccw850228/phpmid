<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
$no=$_GET["no"];
include('include.php');
$acc=$_SESSION["uAcc"];
$del="DELETE FROM user WHERE account='$acc'";

mysqli_query($link,$del);




?>

<a href="checkdel.php">刪除</a>
</body>
</html>

<