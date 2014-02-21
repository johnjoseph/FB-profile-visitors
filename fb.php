<?php
/* from the source code of your facebook profile, search for 'FriendsList', and you can see a csv format of fb profile ids of the form
   "xxxxxxxxxx-y","xxxxxxxxxx-y" copy it onto a file and name it fb.csv.
   specify the lower and upper limits (preferably in diff of 50) to avoid your browser form hanging from processing too many queries */
$lower=0;
$upper=50;
$file=fopen('fb.csv','r');
$fgetcsv=fgetcsv($file);
foreach ($fgetcsv as $key => $value) 
{
	if($key>$lower&&$key<$upper)
	{
	$val=explode('-',$value);
	$fget=json_decode(file_get_contents("https://graph.facebook.com/".$val[0]."/"));
	echo $fget->name." ";
	} 
}
?>