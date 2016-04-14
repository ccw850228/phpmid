<html>
<body>
<form action="index.php" method="post">
<input type="number" name="first"><br/>
<input type="number" name="two"><br/>
</form>
<?php
$c=1;
function add(&$a,&$b){
return $a+$b;
}
function miuns(&$a,&$b){
return $a-$b;
}
function times(&$a,&$b){
return $a*$b;
}
function div(&$a,&$b){
return $a/$b;
}
function n(&$a,&$b){
for($i=0;$i<=$b;$i++){
$c=$c*$a;

}
}
function b3(&$a,&$b){

	
}

if(isset($_POST["first"])){
	$a=$_POST["first"];
	$b=$_POST["two"];
}
echo add($a,$b);
// echo miuns($a,$b);
// echo times($a,$b);
// echo div($a,$b);
?>

<input type="submit">
</body>
</html>