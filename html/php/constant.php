<?php
header("Content-Type: text/html;charset=utf-8");


#区分大小写的常量名
define("GREETING","欢迎访问liuwenju.com");
echo GREETING; #输出"欢迎访问 liuwenju.com"
echo "<br>";
echo greeting; #输出greeting


#区分大小写的常量名
#
echo "<br>";
define("GREETING", "欢迎访问liuwenju.com", true);
echo greeting; // 输出"欢迎访问liuwenju.com"




echo "<br>";
function myTest(){
     echo GREETING;
}

myTest();


?>
