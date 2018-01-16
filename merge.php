<?php
	$arr1=  [4,5,7,9,10,34];
	$arr2 = [1,3,6,8,32,33];
	$res=merge($arr1,$arr2);
	foreach ($res as $value) {
		echo " ".$value.", ";
	}
	
	function merge($arr1, $arr2){
		$i=0;
		$j=0;
		$res=[];
		while($i<count($arr1) || $j<count($arr2)){
			if($i>=count($arr1)){
				array_push($res, $arr2[$j]);
				$j++;
			}else{
				if($j>=count($arr2)){
					array_push($res, $arr1[$i]);
					$i++;
				}else{
					if($arr1[$i]<$arr2[$j]){
						array_push($res, $arr1[$i]);
						$i++;
					}else{
						array_push($res, $arr2[$j]);
						$j++;
					}
				}
			}

		}
		return $res;
	}
?>