<?php

$json=read_file("json.txt");
$res=json_decode($json);
$recent='';
$oldest='';
$names=[];

names($res, $names, $recent, $oldest);

echo "<br>Names: ";
for ($i=0; $i <(count($names)-1) ; $i++) { 
	echo $names[$i]." , ";
}
echo $names[$i];
echo "<br>Oldest:".$oldest;
echo "<br>Recent:".$recent;

function names($res, &$names, &$recent, &$oldest){
	foreach ($res as $key => $value) {
		array_push($names, $key);
		if($recent==''){
			$recent=(int)$res->{$key}->{'dob'};

		}else{
			if((int)$res->{$key}->{'dob'}>$recent){
				$recent=(int)$res->{$key}->{'dob'};
			}
		}
		if($oldest==''){
			$oldest=(int)$res->{$key}->{'dob'};

		}else{
			if((int)$res->{$key}->{'dob'}<$oldest){
				$oldest=(int)$res->{$key}->{'dob'};
			}
		}
		if(property_exists($value,'children')){
			/*echo "<br>";
			var_dump($value->{'children'});*/
			names($value->{'children'}, $names, $recent, $oldest);
		}
	}
}

function read_file($file){
	$fp=fopen($file, 'r');
	$contents=fread($fp, filesize($file));
	return $contents;
}


?>