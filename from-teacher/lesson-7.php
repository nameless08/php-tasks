<?php 

	$count = $_COOKIE['counter'] ?? 0;

	setcookie('counter', $count + 1);
	
	setcookie('username', 'Aleks');

	echo 'Вы посетили данную страницу : ' . $count . ' раз.';