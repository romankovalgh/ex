﻿<?php
/*
Создайте переменную и присвойте ей массив, состоящий из пяти элементов,
 например, чисел или строк. Создайте еще одну переменную,
 которой присвойте какое-нибудь значение.
 Теперь создайте конструкцию switch, которая будет определять,
 есть такой элемент в массиве или нет и выводить соответствующее сообщение.
 Для упрощения кода используйте операторы case, 
 идущие друг за другом и содержащие метки в виде значений элементов массива,
 но не прерывающиеся операторами break. Не забудьте про условие по умолчанию,
 которое будет выводить сообщение, если элемента в массиве нет.
 Протестируйте конструкцию, присваивая второй переменной различные значения.
*/
	$a=[1,2,3,4,5];
	$b=3;
	switch ($b){
		case $a[1]: 
		case $a[2]: 
		case $a[3]: 
		case $a[4]: 
		case $a[0]: 
			echo "Такий елемент є!<br>";
			break;
		default: echo "Такого елемента немає в масиві!<br>";
		
	}
	

?>