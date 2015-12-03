<?php
$x = 10;
$y = 6;

echo ($x + $y); //输出16
echo "<br>";
echo ($x - $y); //输出4
echo "<br>";
echo ($x * $y); //输出60
echo "<br>";
echo ($x / $y); //输出1.666666666667
echo "<br>";
echo ($x % $y); //输出4
echo "<br>";



$x = 10;
echo $x; //输出10
echo "<br>";

$y = 20;
$y += 100;
echo $y; //输出120
echo "<br>";


$z = 50;
$z -= 25;
echo $z; //输出25
echo "<br>";


$i = 5;
$i *= 6;
echo $i; //输出30
echo "<br>";

$j = 10;
$j /= 5;
echo $j; //输出2
echo "<br>";

$k = 15;
$k %=4;
echo $k;// 输出3
echo "<br>";


$a = "Hello";
$b = $a . " World!";
echo $b;//输出Hello World!
echo "<br>";

$x= "Hello";
$x .= " World!";
echo $x; //output Hello World!
echo "<br>";



$x = 10;
echo ++$x; //输出11
echo "<br>";

$y = 10;
echo $y++; //输出10
echo "<br>";

$z = 5;
echo --$z; //输出4
echo "<br>";

$i=5;
echo $i--; //输出5
echo "<br>";



$x = 100;
$y = "100";

var_dump($x == $y);
echo "<br>";

var_dump($x === $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x !== $y);
echo "<br>";


$a = 50;
$b = 90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);



$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y;//$x and $y 数组合并

var_dump($z);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";



?>

