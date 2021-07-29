<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Тренируемся !!!</title>
	<?php
	$h = date('H'); # Присваеваем переменной текущее время (часы)
	?>
	<style>
		body {
			background: url(img/<?php echo $h % 8; ?>.jpg);
			background-size: cover;
			color: #ff0;
		}
	</style>
</head>

<body>
	<?php

	/*
	echo "Многострочный коментарий!"; 
	echo "Данные строки закоментированы";
	*/

	#   Однострочный коментарий. Можно так, а
	//  можно коментировать и так

	$r = 50; # Числовая переменная
	$a = 'Много'; # Строковая переменная
	$b = 50.5; # Дроби
	$c = true; # Булевые
	const PI = 3.14; # Константы

	echo "Сейчас $h часов <br>"; # Выводим текущие часы

	echo 'Площадь круга ';
	echo $r * $r * PI;

	$str1 = '$r рублей';
	$str2 = "$a рублей";

	$final = $str1 . $str2; # Через точку склеиваем переменные
	echo $final;

	echo '<hr>'; # Проведем горизонтальную черту

	// Арифметические операции + - * / %
	$res1 = $b + $r;
	$res2 = $b - $r;
	$res3 = $b * $r;
	$res4 = $b / $r;
	$res5 = $b % 8;

	echo "$res1<br>$res2<br>$res3<br>$res4<br>$res5";


	?>
</body>

</html>