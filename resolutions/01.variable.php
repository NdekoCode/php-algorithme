<?php

/** I. Les variables */
// 06. 
$A = 5;
$B = 3;
$C = $A;
$A = $B;
$B = $C;
echo "A: $A: , B: $B\n";
// 07. on dispose de trois variables A, B et C. Ecrivez un algorithme transférant à B la valeur de A, à C la valeur de B et à A la valeur de C (toujours quels que soient les contenus préalables de ces variables).
$A = 9;
$B = 2;
$C = 6;
$D = $A;
$A = $C;
$C = $B;
$B = $D;
// transférant à $B la valeur de $A
// à $C la valeur de $B
// $A la valeur de $C
echo "A: $A: , B: $B, C: $C\n";
$e = "45";
$f = "12";
