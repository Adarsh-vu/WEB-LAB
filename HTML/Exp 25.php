<?php
$array=$_POST['array'];
$arr=explode(',',$array);
rsort($arr);
echo "Array sorted in reverse order: <pre>";
print_r($arr);
echo"</pre>";x
?>

