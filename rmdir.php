<!DOCTYPE html>
<html lang="en">
<head>
<title>Testing</title>
<meta charset="utf-8">

</head>
<body>
	<?php
		function remove_dir($path)
		{
			@rmdir($path);//если каталог пустой удаляем его 
				if(file_exists($path))//если не пустой  выполняем скрипт
				{
					$content = scandir($path);//получаем массив файлов и каталогов, расположенных по пути $path
					$num_arr = count($content);//количество элементов массива
					//var_dump($content);
					for($i = 2; $i < $num_arr; $i++)//c '2'-ух начинаем так как в массиве $content первые два элемента [0]=>"." и [1]=>".."
					{
						$file = $content[$i];//проходим по массиву файлов и каталогов
						$to_file = $path.$file;//составляем путь к файлу
						//проверяем, что это файл а не директория
						if(!is_dir($to_file)) unlink($to_file);//если файл - удаляем
						//а если это каталог - выполняем скрипт для удаления
						else
						{
							$path_child = $to_file.'/';//входим в текущий подкаталог
							remove_dir($path_child);//рекурсивный вызов remove_dir в подкаталогах
						}
					}
				rmdir($path);//удаляем пустой каталог
				}
			//проверка удален ли файл
			if(!file_exists($path)) return true;
			else return false;
		}	
		
		$path = __DIR__ . '/olds/olds2/';
		if(remove_dir($path)) print('Каталог удалён');
		else print('Каталог не удалён');		
	?>

</body>
</html>