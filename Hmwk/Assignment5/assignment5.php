<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Savings Table</title>
</head>

<body>
<?php

function displayArray(){
	echo '<table width="200" border="1">';
    echo '<tr><th>Year</th></tr>';
	echo '<tr><th>5%</th></tr>';
	echo '<tr><th>6%</th></tr>';
	echo '<tr><th>7%</th></tr>';
	echo '<tr><th>8%</th></tr>';
	echo '<tr><th>9%</th></tr>';
	echo '<tr><th>10%</th></tr>';
echo '</table>';
	$table=array();
	 	for($col=1;$col<=7;$col++){
			$table[$col]=array();
		}
}
function fillArray($dep,$rate,$yrs){
	$dep=100;
	$savings = array();
		for($col=1;$col<7;$col++){
			$savings[$col][0]=$dep;
		}
		for($i=1,$yrs=1;$i<=100;$i++,$yrs++){
			$savings[1][$row]=$yrs;
			$savings[2][$row]=$savings[2][$i-1]+$savings[2][$i-1]*.05;
			$savings[3][$row]=$savings[2][$i-1]+$savings[2][$i-1]*.06;
			$savings[4][$row]=$savings[2][$i-1]+$savings[2][$i-1]*.07;
			$savings[5][$row]=$savings[2][$i-1]+$savings[2][$i-1]*.08;
			$savings[6][$row]=$savings[2][$i-1]+$savings[2][$i-1]*.09;
			$savings[7][$row]=$savings[2][$i-1]+$savings[2][$i-1]*.10;
			
		}
		return $savings;
}

?>
<?php
$deposite=100;
displayArray($table);
$table=fillArray($dep,$rate,$yrs);
?>
</body>
</html>