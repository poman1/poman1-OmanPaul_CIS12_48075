<?php

/*  Paul Oman
	Sept 15th, 2014
	Purpose: Assignment 2
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    //Intialize the input and declare variables
	$frequency=$_GET['frequency'];
	
	//Determine the spectrum
	if($frequency>1e-2&&$frequency<=1e3){
		echo "Radio";
	} 
	elseif($frequency>1e-5&&$frequency<=1e-2){
		echo "Microwave";
	}
	elseif($frequency>1e-6&&$frequency<=1e-5){
		 echo "Infrared";
	}
	elseif($frequency>1e-8&&$frequency<=1e-6){
		 echo "Visiable";	
	}
	elseif($frequency>1e-10&&$frequency<=1e-8){
		echo "Ultraviolet";	
	}
	elseif($frequency>1e-12&&$frequency<=1e-10){
		echo "X-Ray";	
	}
	elseif($frequency<=1e-12){
		echo "Gamma Ray";	
	}

?>

</body>
</html>