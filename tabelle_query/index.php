<link rel="stylesheet" href="style.css">
<?php
include "config.php";
$query = "SELECT *
	FROM Impiegati
	WHERE Stipendio >=(SELECT MIN(Stipendio)
  	FROM Impiegati) +10000;";

$mysqli = @new mysqli($dbhost, $dbuname, $dbpass,$dbname);
	mysqli_select_db($mysqli,$dbname);

if ($result=@mysqli_query($mysqli, $query))
  {
  // Return the number of rows in result set
  $numOfRows=mysqli_num_rows($result);
  
//  printf("Result set has %d rows.<br>",$numOfRows);
  
  $numfields = mysqli_num_fields($result);

  if ($numOfRows>0){
	echo "<table class = dati>";
	echo " <tr>";
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	foreach($row as $x => $x_value) {
		echo "<th>" . $x . "</th>";   
	} 
	echo "</tr>";
	echo " <tr>";
 		foreach($row as $x => $x_value) {
			echo "<td>" . $x_value . "</td>";   
		} 
	echo "</tr>";

 
  for ($i = 1; $i < $numOfRows; $i++){
		echo " <tr>";
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		foreach($row as $x => $x_value) {
		echo "<td>" . $x_value . "</td>";   
		} 
		 echo "</tr>";
	}
	echo "</table><br>";
	}

  // Free result set
  mysqli_free_result($result);
  }
mysqli_close($mysqli);






?>
