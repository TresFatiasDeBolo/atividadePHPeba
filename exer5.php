<?php
$nota1 = 3.0;
$nota2 = 6.0;
$nota3 = 9.0;

if ($nota1 < 5.0) {
    echo "A primeira nota é $nota1, e ela está reprovada.<br/>";
} elseif ($nota1 > 5 && $nota1 < 7) {
    echo "A primeira nota é $nota1, e ela está de recuperação.<br/>";
} else {
    echo "A primeira nota é $nota1, e ela está aprovada.<br/>";
}

if ($nota2 < 5.0) {
    echo "A segunda nota é $nota2, e ela está reprovada.<br/>";
} elseif ($nota2 > 5 && $nota2 < 7) {
    echo "A segunda nota é $nota2, e ela está de recuperação.<br/>";
} else {
    echo "A segunda nota é $nota2, e ela está aprovada.<br/>";
}

if ($nota3 < 5.0) {
    echo "A terceira nota é $nota3, e ela está reprovada.<br/>";
} elseif ($nota3 > 5 && $nota3 < 7) {
    echo "A terceira nota é $nota3, e ela está de recuperação.<br/>";
} else {
    echo "A teceira nota é $nota3, e ela está aprovada.<br/>";
}
?>