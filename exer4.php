<?php
$numero = 260;

if ($numero % 10 == 0 || $numero % 10 == 2 || $numero % 10 == 4 || $numero % 10 == 6 || $numero % 10 == 8) {
    echo "O número definido na variável é $numero, e ele é par.";
} else {
    echo "O número definido na variável é $numero, e ele é ímpar.";
}
?>