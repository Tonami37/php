<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;

echo $a + $b;
echo "<br />";

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";


$answer6 = $a > $b;
echo $answer6;
echo "<br />";

echo ($a > 10 && $a < 30);
echo "<br />";

$a = $b;
$c += $d;

echo "<br />";
echo $a;
echo "<br />";
echo $c;
echo "<br />";
echo "<br />";

$a = $b = 10;
$c = $d = 5;

echo ++$a;
echo "<br />";
echo $b++;
echo $b;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
echo "<br />";
echo "<br />";
