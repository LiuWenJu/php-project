<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

Name: <input type="text" name="fname">
<input type="submit">
</form>


<?php
$nane = $_REQUEST['fname'];
echo $name;

?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
$name = $_POST['fname'];
echo $name;
?>



<a href="test_get.php?subject=PHP&web=runoob.com">测试 $_GET</a>
<?php

echo "Study ". $GET['subject']. " at " . $_GET['web'];
?>



</body>
</html>
