<?php
try {
    echo age(1992) . "<br>";
    echo age("1992") . "<br>";
    echo age(1900) . "<br>";
    echo age(1992.5) . "<br>";
    echo age(-1992) . "<br>";
    
} catch (Exception $e) {
    echo 'Exception: ',  $e->getMessage(), "\n";
}


function age($y){
	if(!is_numeric($y)){
		throw new Exception('year must be a number');
	}else{
		if(is_float($y)){
			throw new Exception('year must be an integer number');
		}else{
			if($y<0){
				throw new Exception('year must be a positive number');
			}else{
				if((Date('Y')-$y)>115){
					throw new Exception('a person cant live more than 115 years');
				}else{
					return (Date('Y')-$y);
				}
			}
		}
		
	}
	

}
?>