<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<body>
<center>
<h2>登入</h2>
<form action="" method="post">
請輸入帳號:<input type="text" name="uAcc"><br/>
請輸入密碼:<input type="password" name="uPwd"><br/>
<input type="submit">
<input type="reset">
</form>
<?php
ob_start();
session_start();
require('include.php');
if(isset($_POST["uAcc"])){
	$uAcc=$_POST["uAcc"];
	$uPwd=$_POST["uPwd"];

$read="SELECT * FROM user WHERE account='$uAcc' AND pwd='$uPwd'";
$readresult=mysqli_query($link,$read);

$rows=mysqli_num_rows($readresult);
	
if($rows){
	echo "Success";
	$_SESSION["check"]="yes";
	$_SESSION["uAcc"]=$uAcc;
	$_SESSION["uPwd"]=$uPwd;
echo 
	header('Location:index.php');
}
	
else{
	echo "Failed, Will back to login page after 3 second";
	header('refresh:3; url="log.php"');
	
}
}
?>


</center>
</body>
</html>
