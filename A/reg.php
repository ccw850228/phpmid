<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<body>
<center>
<h2>註冊</h2>
<form action="" method="post">
請輸入帳號:<input type="text" name="uAcc"><br/>
請輸入密碼:<input type="password" name="uPwd"><br/>
請輸入e-mail:<input type="text" name="email"><br/>
請輸入電話:<input type="text" name="phone"><br/>


<input type="submit">
<input type="reset">
</form>
<?php
if(isset($_POST["uAcc"])){
	$uAcc=$_POST["uAcc"];
	$uPwd=$_POST["uPwd"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
require('include.php');



$add="INSERT INTO user(account,pwd,email,phone) VALUES('$uAcc','$uPwd','$email','$phone')";
$check="SELECT * FROM user WHERE account='$uAcc'";
$readresult=mysqli_query($link,$check);
$result=mysqli_fetch_array($readresult);
if ($result[1]=="$uAcc"){
	echo "帳號已被使用";
	echo "註冊成功，3秒後前往登入頁面";
	echo	"<br/>";
	header('refresh:3; url="reg.php"');
}else
{
	mysqli_query($link,$add);
	echo "註冊成功，3秒後前往登入頁面";
	echo	"<br/>";
	 header('refresh:3; url="log.php"');
}
}
?>
<!-- <a href="login1.php">前往登入</a> -->
</center>
</body>
</html>