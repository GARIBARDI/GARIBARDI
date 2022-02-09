<!DOCTYPE html>
<html>
<body>

<?php
$arr_arr = array (
 array("nome" => "yamaha", "prezzo" => "478", "quantità" => "7"),
    array("nome" => "kawasaki", "prezzo" => "148", "quantità" => "2"),
    array("nome" => "honda", "prezzo" => "315", "quantità" => "4"),
);

$NumOfRows = count ($arr_arr);

for ($i = 0; $i < $NumOfRows; $i++){
 $row = $arr_arr[$i];
    $nome = $row ["nome"];
    $prezzo = $row ["prezzo"];
    $quantità = $row ["quantità"];
    
    $totprezzo = $row["prezzo"] * $row["quantità"];
 $prezzoiva = $totprezzo + $totprezzo * 0.22;
    echo "nome: ". $row["nome"] . "<br>";
    echo "quantità: ". $row["quantità"] . "<br>";
    echo "prezzo totale più iva: ". $prezzoiva . "€<br><br>";
}
?>

</body>
</html>
