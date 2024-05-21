<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicao</title>
</head>
<body>
    <?php
$a = 40;
if($a > 10 ){
    echo "O número {$a} é maior que 10!<br><br>";
}
$b = 90;
if($a > $b){
    echo"O número {$a} é maior que o número {$b}";
}
elseif($b == 90){
    echo"O número B {$b} é igual ao número 90!";
    
    }
    /*
else {
 echo"O número {$b} é maior que o número {$a}";
}*/

?>
</body>
</html>