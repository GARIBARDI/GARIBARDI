<!DOCTYPE html>
<html>
<body>

<?php
$arr_arr = array (
 array( "cliente" => "Simone", "importo" => 874, "pagato" => "sospeso"),
 array( "cliente" => "Mario", "importo" => 177, "pagato" => "SI"),
 array( "cliente" => "Ciccio", "importo" => 479, "pagato" => "NO"),
);

$numOfRows=count($arr_arr);

for($i=0; $i<$numOfRows; $i++){
    $row=$arr_arr[$i];
    $cliente = $row["cliente"];
    $importo = $row["importo"];
    $pagato = $row["pagato"];
    $tot += $row["importo"];

    echo "cliente: ". $row["cliente"]. "<br>";
    echo "importo: ". $row["importo"]. "€<br>";
    echo "stato del pagamento (SI-NO-sospeso): ". $row["pagato"]. "<br>" ."<br>";

 if($pagato == "NO"){ echo $row["cliente"]. " ". "PAGAMENTO NON EFFETTUATO". "<br>";}
}
echo "<br>". "importo totale: ". $tot. "€<br>";
?>

</body>
</html>
