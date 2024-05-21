<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
$numero= array("1", "2", "3", "4");
echo"<br>O número escolhido foi: " .$numero[1];
echo"<br>O número escolhido foi: ". $numero[3];
$a = "12";
if( $a!= $numero){
    echo"<br>Não existe o número {$a} na lista! Somente.".$numero[0] .", "
    .$numero[2].", " .$numero[2].", ".$numero[3].".<br>";

    echo"O número ".count($numero)." indica a quantidade de elementos na lista!";
}
?>
</body>
</html>