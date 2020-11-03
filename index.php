<?php

//Pensando em todos os números naturais inferiores a 10 que são múltiplos de 3 ou 5, temos 3, 5, 6 e 9. Somando esses múltiplos obtemos o valor 23. Utilize um algorítimo para calcular a soma de todos os múltiplos de 3 ou 5 abaixo de 1000

$x   = 3;
$z   = 5;
$res = 0;

for($i=0; $i<1000; $i++){
    if($i % $x == 0 || $i % $z == 0){
        $res += $i;
    }
}

echo "A soma dos multiplos de 3 e 5 abaixo de 1000, é: " . $res;

?>