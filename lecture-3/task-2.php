<?php

/*
	
	Задача №2.

	Написать функцию, которая проверяет, является ли переданное число или строка палиндромом и возвраащет true. В противном случаи возвращает false.
	Палиндром — это число или текст, который читается одинаково и слева, и справа: 939; 49094; 11311.

*/
	
	function palindrom($k) {

		$str = (string)$k;

		for($i=0; $i < strlen($str); $i++) {
			
			if( $str[$i] != $str[ strlen($str )- $i - 1]) {
				
				return "false";

			}

			else {

				return "true";

			}	
		}
	}

	echo palindrom(11311);
	
	echo '<br />';
	
