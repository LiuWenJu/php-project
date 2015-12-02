<?php
$x = "Hello World!";
echo $x;
echo "<br>";
$x = "Hello World!";
echo $x;



echo "<br>";
$x = 34344;
var_dump($x);
echo "<br>";
$x = -232323;// negative number
var_dump($x);
echo "<br>";
$x = 0x8c; //hexadecimal number
var_dump($x);
echo "<br>";
$x = 035; #octal number
var_dump($x);


echo "<br>";
$x = 10.365;
var_dump($x);
echo "<br>";

$x = 2.4e3;
var_dump($x);
echo "<br>";

$x = 8E-5;
var_dump($x);




echo "<br>";
$x = true;
$y = false;
echo $x,$y;



echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);



echo "<br>";
class Car{
    var $color;
    function Car($color="green"){
        $this->color = $color;
    }
    function what_color() {
         return $this->color;
    }
}





echo "<br>";
$x = "Hello World!";
$x = null;
var_dump($x);



?>
