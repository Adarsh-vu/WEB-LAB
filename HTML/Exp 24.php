<?php
$num = $_POST['num'];
$sum = 0;

if ($num <= 1) {
    echo "Invalid Entry";
} 
else {

for ($i = 2; $i<$num; $i++){
        $isPrime = true;
        for ($j = 2; $j * $j <= $i; $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
if ($isPrime) {
	$sum += $i;
        }
    }
    echo "The sum of prime numbers up to $num is $sum";
}
?>
