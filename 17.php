<?php
$m=(int)$_POST['mark'];
$tm=(int)$_POST['tmark'];
$p=$m/$tm*100;
if($p>=60)
	{
		echo "first division";
		}
elseif($p>=45)
	{
		echo "second division";
		}
elseif($p>=33)
	{
		echo "third division";
		}
else
	{
		echo "fail";
		}
?>
