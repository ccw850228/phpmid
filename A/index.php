<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>



<?php
session_start();
$a=$_SESSION["uAcc"];
echo "".$a."歡迎回來";

?>

<a href="profile.php">修改資料</a>
</body>
</html>