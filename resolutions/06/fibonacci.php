<?php
function fibonacci($n)
{
    if ($n <= 0) {
        return 0;
    } elseif ($n === 1) {
        return $n;
    }

    $number1 = 0;
    $number2 = 1;
    for ($i = 1; $i < $n; $i++) {
        $sum = $number1 + $number2;
        $number1 = $number2;
        $number2 = $sum;
    }
    return $sum;
}
$input = (int) readline("Entrer un nombre : \n");
print "La suite de fibonacci à partir du $input";
for ($i = 0; $i < $input; $i++) {
    print fibonacci($i) . "\n";
}
