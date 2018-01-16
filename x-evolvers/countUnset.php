<?php
	echo "<br>".countUnset(65535);
	echo "<br>".countUnset(12547);
	function countUnset($n){
		$bit0=0;
		$bit1=0;
		while($n>0){
			if(($n%2)==0){
				$bit0++;
				$n=$n/2;
			}else{
				$bit1++;
				$n=($n-1)/2;
			}
		}
		if(($bit0+$bit1)<16){
			return (16-$bit1);
		}else{
			return $bit0;
		}	
	}
?>