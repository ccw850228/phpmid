<html>
<body>
<center>
<?php
session_start();

$acc=$_SESSION["uAcc"];
// $uPwd=$_POST["uPwd"];
// $email=$_POST["email"];
// $phone=$_POST["phone"];
include('include.php');
// echo $acc;
// $update="UPDATE user SET pwd='$uPwd',email='$email',phone='$phone' WHERE account='$acc'";
// mysqli_query($link,$update);

//讀取資料
$read="SELECT * FROM user  WHERE account='$acc'";
$readresult=mysqli_query($link,$read);
	echo "<table border='1'>";
	echo "<tr><td>no</td><td>account</td><td>pwd</td><td>email</td><td>phone</td><td>更新資料</td></tr>";
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[0]."</td>";
	echo "<td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td>";
	// echo "<td><a href='update.php?no=".$result[0]."'>更新資料</a></td>";
	
	echo "</tr>";
}
	echo "</table>";

$no=$_GET["no"];
include('include.php');

$read="SELECT * FROM user WHERE account='$acc'";
$readresult=mysqli_query($link,$read);
$result=mysqli_fetch_array($readresult);

echo "<form action='profile.php' method='post'>";
echo "編號:".$result[0]."<br/>";
echo "<input type='hidden' name='no' value='".$result[0]."'>";

// echo "帳戶:<input type='text' name='account' value='".$result[5]."'><br/>";
echo "pwd:<input type='text' name='uPwd' value='".$result[2]."'><br/>";
echo "email:<input type='text' name='email' value='".$result[3]."'><br/>";
echo "email:<input type='text' name='phone' value='".$result[4]."'><br/>";
echo "<input type='submit' value='更新'>";
echo "<input type='reset'>";
echo "</form>";

$uPwd=$_POST["uPwd"];
$email=$_POST["email"];
$phone=$_POST["phone"];


$update="UPDATE user SET pwd='$uPwd',email='$email',phone='$phone' WHERE account='$acc'";
mysqli_query($link,$update);



?>
<a href="checkdel.php">刪除帳號</a>
</center>
</body>
</html>