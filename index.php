<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <h3> 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
            если $a и $b положительные, вывести их разность
            если $а и $b отрицательные, вывести их произведение
            если $а и $b разных знаков, вывести их сумму </h3>
        <?php
        $a = -20;
        $b = 6;
        if ($a >= 0 && $b >= 0) {
            echo $a - $b;
        } else if ($a < 0 && $b < 0) {
            echo $a * $b;
        } else {
            echo $a + $b;
        }
        ?>
        <h3> 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.</h3>
        <?php
        $a = 0;
        switch ($a) {
            case 0:
                echo $a++ . '<br>';
            case 1:
                echo $a++ . '<br>';
            case 2:
                echo $a++ . '<br>';
            case 3:
                echo $a++ . '<br>';
            case 4:
                echo $a++ . '<br>';
            case 5:
                echo $a++ . '<br>';
            case 6:
                echo $a++ . '<br>';
            case 7:
                echo $a++ . '<br>';
            case 8:
                echo $a++ . '<br>';
            case 9:
                echo $a++ . '<br>';
            case 10:
                echo $a++ . '<br>';
            case 11:
                echo $a++ . '<br>';
            case 12:
                echo $a++ . '<br>';
            case 13:
                echo $a++ . '<br>';
            case 14:
                echo $a++ . '<br>';
            case 15:
                echo $a++ . '<br>';
        }
        ?>
        <h3>3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</h3>

        <?php

        function sum($a, $b)
        {
            return $a + $b;
        }
        function del($a, $b)
        {
            return $a / $b;
        }
        function scale($a, $b)
        {
            return $a * $b;
        }
        function minus($a, $b)
        {
            return $a - $b;
        }
        echo sum(1, 4) . '<br>';
        echo del(10, 2) . '<br>';
        echo scale(3, 5) . '<br>';
        echo minus(7, 1) . '<br>';
        ?>

        <h3>4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</h3>
        <?php
        function mathOperation($arg1, $arg2, $operation)
        {
            switch ($operation) {
                case 'sum':
                    return sum($arg1, $arg2);
                    break;
                case 'del':
                    return del($arg1, $arg2);
                    break;
                case 'scale':
                    return scale($arg1, $arg2);
                    break;
                case 'minus':
                    return minus($arg1, $arg2);
                    break;
            }
        }
        echo mathOperation(11, 4, 'sum') . '<br>';
        echo mathOperation(60, 2, 'del') . '<br>';
        echo mathOperation(8, 5, 'scale') . '<br>';
        echo mathOperation(5, 1, 'minus') . '<br>';
        ?>

        <h3>6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</h3>
        <?php
        function power($val, $pow)
        {
            if ($pow === 1) return $val;
            return $val * power($val, --$pow);
        }

        echo power(2, 5) . "<br>";
        echo power(10, 3);
        ?>


        <h3>7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
            22 часа 15 минут
            21 час 43 минуты</h3>

        <?php
            $timeStamp = time();
            $hour = date('G', $timeStamp);
            $minutes = date('i', $timeStamp);
            /* 1 час 2 часа 3 часа 4 часа
               5 часов ... 11 часов 12 часов ... 20 часов
               21 час 22 часа 23 часа 24 часа
            */
            // функция рассчитана на вывод как часов так и минут (окончания подставляются в параметры)
            function getTimeName ($value, $sufa, $sufb, $sufc) {
                if ($value > 20) $value %= 10;
        
                if ($value == 1) return " $sufa ";
                if ($value > 1 and $value < 5) return " $sufb ";
                return " $sufc ";
            }
            echo $hour . ':' . $minutes . '<br>';
            $timeTablo = $hour . getTimeName($hour, 'час', "часа", "часов");
            $timeTablo .= $minutes . getTimeName($minutes, 'минута', 'минуты', "минут");
            echo $timeTablo;           
        ?>


    </div>

</body>

</html>