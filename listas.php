<?php
// comando para rodar o servidor embutido php php -S localhost:8080
$idadeList = [21, 23, 19, 25, 30, 41, 18];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList[] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}
