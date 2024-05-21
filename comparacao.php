<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparacao</title>
</head>
<body>
    <?php
$a = 45;
$b = 45;
var_dump ($a === $b );// Comparando se a variável a e extamente igual b  
var_dump ($a == $b); // Comparando se a variável a e igual a variável b 
var_dump($a =! $b); // Comparando se a varável a e diferente a variável b
var_dump($a > $b); // Comparando de a variável a e maior que a variável b
var_dump($a < $b); // Comparando de a variável a e menor que a variável b
var_dump($a >= $b); // Comparando de a variável a e maior ou igual  que a variável b
var_dump($a <= $b); // Comparando de a variável a e menor  ou igual  que a variável b
var_dump($a <=> $b); // Comparando de a variável a e menor, igual ou maior   que a variável b
?>
</body>
</html>