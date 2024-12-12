<?php
$fac=(int)$_POST['fac'];
if($fac<0)
{
echo "factorial is not defined for neative numbers:";
}
else
{
	$res=1;
	for($i=1;$i<=$fac;$i++)
	{
	$res*=$i;
}
echo  "the factorial of $fac is $res";
}
?>	
