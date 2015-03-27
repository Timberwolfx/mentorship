<?php
//gets file from dropbox
$file = fopen("https://dl.dropboxusercontent.com/s/yl9lxom237szka2/test.txt?dl=0","r");
	
	//counter vars for each annotation type
	$IKP = 0;
	$CLASI = 0;
	
//limits # lines read, keeps things running smoother
for ($limit = 0; $limit < 100; $limit++)
{
 	//assigns each line to variable
	$line = fgets($file);
	
	//reads portion of string to determine category
	$result = substr($line, 4, 3);	
	if ($result == "IKP")
	{
		$IKP ++;
	}
	else if ($result == "CLA")
	{
		$CLASI ++;
	}
	echo $line;
}

  echo $IKP . "<br>";
  echo $CLASI . "<br>";

fclose($file);
?>
