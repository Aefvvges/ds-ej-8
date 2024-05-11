<?php
$a = $_GET['a'];
$b = $_GET['b'];

if($a != $b){
    echo 'Suma: ' . $s = $a + $b;
    echo '<br>';
    echo 'Resta: ' . $r = $a - $b;
    echo '<br>';
    echo 'Multiplicación: ' . $m = $a * $b;
    echo '<br>';
    echo 'División: ' . $d = $a / $b;
}