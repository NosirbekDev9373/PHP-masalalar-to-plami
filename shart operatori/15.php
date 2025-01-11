<?php
// Uchta son berilgan wu sonlarning 2 ta eng kattasini chiqar 
$a = 31;
$b = 12;
$c = 34;

if ($a < $b && $a< $c) {
    echo "$b va $c";
} elseif ($b < $a && $b < $c) {
    echo "$a va $c";
} elseif ($c < $a && $c < $b) {
    echo "$a va $b";
} else {
    echo "bir biriga teng bumasligi kk sonlar";
}

?>
