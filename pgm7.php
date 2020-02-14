<?php
$a = 4;
$b = 6;
$a+=4;
$b-=7;

$y = 100;
$z = "100";

var_dump($y == $z);
var_dump($y === $z);
var_dump($y != $z);
var_dump($y !== $z);
var_dump($y > $z);
var_dump($y < $z);
var_dump($y >= $z);
var_dump($y <= $z);
var_dump($y <=> $z);

echo $a;
echo "<br>";
echo $b;
?>