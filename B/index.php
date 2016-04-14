<html>
<body>
<form action="index.php" method="post">
<input type="number" name="first"><br/>
<input type="number" name="two"><br/>
</form>
<?php
$c=0;
$d=0;
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
return $c
}
function b3(&$a){

$c=$a/100;
$d=$a%100;
if(($c+$d)*(($c+$d)}==$a){
	return $a;
else if {
	$c=$a/10;
	$d=$a%10;}
	if((($c+$d)*(($c+$d)}==$a)){
	return $a;

	}

}
}
}
	
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