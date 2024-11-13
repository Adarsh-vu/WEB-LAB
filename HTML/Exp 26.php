<?php
$email=$_POST['email'];
$u=strstr($email,'@',true);
if($u)
{
echo"Username:$u";
}
else
{
echo"Enter a valid email address";
}
?>
