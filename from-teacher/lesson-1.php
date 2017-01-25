<?php
    // Простые (скалярные)
    // int   - целое число
    // float - дробное число (число с плавающей точкой)
    // bool  - логическое значение
    // str   - строки
    
    // Составные (сложные)
    // array  - массивы
    // object - объекты
    
    // Специальные (служебные)
    // resourse - ресурсы
    // null     - пустота
    // void     - ничто

    $a = 123.5;
    $str1 = 'Hello world! ' . $a . "\n";
    $str2 = "Hello world! $a\n";
    
    $arr1 = [1, 2.5, true, null, 'Test'];
    
    $person = new StdClass();
    $person->firstname = 'Ваня';
    $person->lastname = 'Петрович';
    $person->age = 666;
    
    $person2 = new StdClass();
    $person2->firstname = 'Петя';
    $person2->lastname = 'Иванов';
    $person2->age = 25;
    $person2->isDeveloper = true;
    
    // $fp = fopen('hello.php', 'r');
    // var_dump($fp);
    // fclose($fp);

    // Математические операторы
    // + - * / % **
    // Операторы сравнения
    // == != === !== < > <= >=
    // Логические операторы
    // && || and or !
    // Инкремент, декремент
    // ++ -- ($i++ ++$i $i-- --$i)
    // Строковые
    // .
    // Операторы присваивания
    // = += -= *= /=
    // , [ ]
    
    $a = '123';
    // $a = (bool) $a;
    
    var_dump(
        is_string($a)
    );
    
    
    const DEBUG = true;

    echo DEBUG;
