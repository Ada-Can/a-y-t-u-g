<?php
$metin="Aytug";
$metinuzunlugu=strlen($metin);
$dizi = array();
for($i=0;$i<=$metinuzunlugu;$i++)
{

if($i==0)
{
	
	$eleman = substr($metin,$i,1); 
	array_unshift($dizi,$eleman);
	
}
else
{
	$eleman = substr($metin,$i,1); 
	array_unshift($dizi,"-".$eleman);
	
}
	
	   
	
}
$diziters = array_reverse($dizi);


for($sat�r=0;$sat�r<$metinuzunlugu;$sat�r++){
	for($sutun=0;$sutun<$sat�r+1;$sutun++){
		echo $diziters[$sutun]; 		
	}
echo"<br/>";
}	
	

//a
//a-y
//a-y-t
//a-y-t-u
//a-y-t-u-g
?>

