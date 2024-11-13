<?php
$m=(int)$_POST['mark'];
$tm=(int)$_POST['tmark'];
$p=$m/$tm *100;
if ($p >= 60){
    echo "Congratsss!!! you got First Division";
}
elseif ($p >= 45) {
    echo "Congratsss!!! you got Second Division";
} elseif ($p >= 33) {
    echo "Congratsss!!! you got Third Division";
} else {
    echo "You are Failed";
}
?>
