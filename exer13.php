<?php
function verificarPrimo() {
    $teste1 = 5;
    $teste2 = 9;
    $teste3 = 10;
    if ($teste1 % 10 == 0 || $teste1 % 10 == 2 || $teste1 % 10 == 4 || $teste1 % 10 == 6 || $teste1 % 10 == 8) {
        echo "O número $teste1 não é primo.<br/>";
    } else {
        echo "O número $teste1 é primo.<br/>";
    }

    if ($teste2 % 10 == 0 || $teste2 % 10 == 2 || $teste2 % 10 == 4 || $teste2 % 10 == 6 || $teste2 % 10 == 8) {
        echo "O número $teste2 não é primo.<br/>";
    } else {
        echo "O número $teste2 é primo.<br/>";
    }

    if ($teste3 % 10 == 0 || $teste3 % 10 == 2 || $teste3 % 10 == 4 || $teste3 % 10 == 6 || $teste3 % 10 == 8) {
        echo "O número $teste3 não é primo.<br/>";
    } else {
        echo "O número $teste3 é primo.<br/>";
    }
}

verificarPrimo();
?>