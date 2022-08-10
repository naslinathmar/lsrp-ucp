<?php
$json_string = 'http://localhost/api/data.php';

$jsondata = file_get_contents($json_string, true);
$obj = json_decode($jsondata);

for($i = 0; $i < sizeof($obj); $i++)
{
	$id = 20001 + $i;
	
	echo "array($id, ";
	echo '"';
	echo $obj[$i]->{'name'};
	echo '", ';
	echo $obj[$i]->{'race'};
	echo ', ';
	echo $obj[$i]->{'gender'};
	echo ', ';
	echo $obj[$i]->{'weight'};
	echo ', ';
	echo $obj[$i]->{'category'};
	echo ", 0),<br>";
}



?>