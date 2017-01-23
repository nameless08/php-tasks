<?php
	
/* 
	Задача №4.
	
	Написать программу для перевода числа из десятичной системы счисления в двоичную и наоборот.
	
*/


	$n = 8;
	$result = '';
	
	while($n > 0) {
		if($n % 2 == 0) {
			$result = $result.'0';
			$n = (int)($n / 2);
		}
		if($n % 2 == 1){
			$result = $result.'1';
			$n = (int)$n / 2;
		}
    }
		
	$is = 0;
	$a = 0;//длина строки
	while ($result[$is] != null) { //ищем длину строки
			++$a;
			$is++;
	}
	
	$ak = $a / 2;
	
	for ( $i = 0; $i < $ak; $i++) {
			$k = $result[$i];
			$result[$i] = $result[($a - 1) - $i];
			$result[ ( $a - 1 ) - $i ] = $k;
		}

	echo $result;
		
	//перевод обратно из двоичной в десятичную
	
	$dec = 0;
	$pw = 0;//степень двойки
	for ($i = $a - 1; $i > 0; $i--) {
		$dec = $dec + (int)$result[$i] * (2 ** $pw);
		$pw++;
	}
	
	echo '<br />';

	echo $dec;
		
	//echo '<br />';