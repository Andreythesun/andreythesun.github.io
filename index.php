<!DOCTYPE html>
<html>
 <head>
 	<meta charset="utf-8">
 	<title>Сайт апулаза</title>
 	<meta>
 </head>
<?php
$connectiondb = mysqli_connect('localhost', 'root', '', 'apulaz_db' );
  //подключение к бд
global $result;
global $record;

$result = mysqli_query($connectiondb, "SELECT * FROM `articles`");

while (($record = mysqli_fetch_assoc($result))) //массив
{
print_r ($record); //выведение переменных
echo '<hr>';
}
?>

<body>
<form action="first.php" metod="post">
 <p>Name:<input type="text" name="name" /></p>   <!--imput "name"-->
 <p>Age: <input type="text" name="age" /></p>     <!--input age-->
 <p><input type="reset" name="submit" value="Submit" /></p>  <!--submi-->
</form>
</body>
</html>