<?php
$n=$_POST['num'];
if($n==0){
	echo "The number is neither positive nor negative, it is ZERO";
}
else if($n>0) {
	echo "The number entered is POSITIVE";
}
else {
	echo "The number entered is NEGATIVE";
}
