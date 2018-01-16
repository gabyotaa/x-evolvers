<?php
for ($i=1; $i <=100 ; $i++) { 
	echo "<br>".multipliers($i);
}
function multipliers($n){
	$mult= array(3 =>'Fizz' ,5=>'Buzz' );
	$res='';
	foreach ($mult as $key => $value) {
		if(($n%$key)==0){
			$res=$res.$value;
		}
	}
	if($res==''){
		return $n;
	}else{
		return $res;
	}
}
?>