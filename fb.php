<?php
$file=fopen('fb.csv','r');
$fgetcsv=fgetcsv($file);
foreach ($fgetcsv as $key => $value) 
{
	if($key>600&&$key<650)
	{
	$val=explode('-',$value);
	$fget=json_decode(file_get_contents("https://graph.facebook.com/".$val[0]."/"));
	echo $fget->name." ";
	} 
}
?>