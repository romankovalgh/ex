﻿<?php
/*
Создайте переменную $a и
 присвойте ей ноль
 в качестве стартового значения.
 Выведите на экран
 при помощи цикла while
 цифры от 1 до 5,
 использовав для этого
 операцию префиксного инкремента
 переменной $a. Сбросьте значение
 переменной и сделайте тоже самое,
 но при помощи цикла do/while.
 Скрыть решение.
*/	$i=0;
	while($i<5){
		echo ++$i.'<br>';
	}
	echo '<br>';
	$i=0;
	do{
		echo ++$i.'<br>';
	}while($i<5);