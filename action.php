<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 24.05.2017
 * Time: 12:01
 */
        $a = $_POST['valuea'];

        $res = fopen('result.txt', 'a');
        for ($x = -10; $x <= 10; $x++)
        {
            if($x != 0)
            {
                $f = (pow($x, 2) + $a) / $x;
                echo "f(" . $x . ") = " . $f . "<br>";
                fwrite($res, "f(" . $x . ") = " . $f .PHP_EOL);
            }
            else
            {
                echo "Невозможно рассчитать при x = " . $x . "<br>";
                fwrite($res, "f(" . $x . ") = невозможно рассчитать (x = 0)" .PHP_EOL);
            }
        }
        fclose($res);

?>.