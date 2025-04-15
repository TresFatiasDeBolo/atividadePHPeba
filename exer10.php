<?php

function calcularMedia() {
    $nota1 = 3;
    $nota2 = 7;
    $nota3 = 4;
    $notas = array($nota1, $nota2, $nota3);
    $media = $notas[0 + 1 + 2] / count($notas);

    echo "A média das notas é $media.";
}

calcularMedia();
//Eu tentei usar o array_count_value e o array_sum pra calcular isso, mas não funcionou,
//eu pesquisei e não consegui entender do pq esses 2 não funcionavam
?>