<?php
$fact=(int)$_POST['fact'];
if($fact<0) {
	echo "Factorial of the number is not defined for negative numbers.";
	}

else{
	$result=1;
	for($i=1;$i<=$fact;$i++) {
		$result=$result*$i;
		}
	echo "The Factorial of $fact is $result.";
	}
	?>
		
