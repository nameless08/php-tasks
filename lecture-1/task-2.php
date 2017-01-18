<?php
	
$acres = 10; // количество соток
$area = ($acres * $acres) * 10; // общая площадь

$section_length = 15; // длина участка в метрах
$section_width = 25; // ширина участка в метрах

$section_area = $section_length * $section_width; // площадь участка

$rest = $area % $section_area; // остаток

echo $rest;