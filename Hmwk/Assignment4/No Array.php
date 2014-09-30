<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Electro Magnetic Spectrum Table</title>
</head>
<body>

	<!--Electro Magnetic Spectrum Image -->
	<center><img src="Spectrum.png" width="478" height="338" alt="Spectrum" /></center>
    
 <center><table width="200" border="1">
              <tr>
                <th>Row</th>
                <th>Wavelength</th>
                <th>Band</th>
              </tr>
 
    
 <?php
 //Declared variables
$band=NULL;
$power = 3;
//For loop for table
for($i=1;$i<=16;$i++){
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$power."</td>";
		echo "<td>".$band."</td>";
		echo "</tr>";
	
	if($power>10e4&&$power<=10e-1)
		$band= "Radio";
 
	if($power>10^-1&&$power<=10e-3)
		$band= ">Microwave";

	if($power>10^-3&&$power<=7e-6)
		$band= "Infrared";
	
	if($power>7e-6&&$power<=4e-6)
		$band= "Visiable";	
	
	if($power>4e-6&&$power<=10e-8)
		$band= "Ultraviolet";	
	
	if($power>10e-8&&$power<=10e-12)
		$band= "X-Ray";	
	
	if($power<=10e-12)
		$band= "Gamma Ray";		
}
?>
</table></center>
</body>
</html>