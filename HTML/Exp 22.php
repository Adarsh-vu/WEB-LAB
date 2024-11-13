<?php
$number=$_POST['number'];
$n=$_POST['N'];
$result=$number%$n;
if($result==0){
	echo "The number $number is divisible by $n";
}
else
{
	echo "The number $number is not divisible by $n";
}
?>
