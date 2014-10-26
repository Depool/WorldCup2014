<?php
function bin_power($num, $pow, $modulo)
{
    if ($pow == 0)
        return 1 % $modulo; //число в степени 0 = 0
    if ($pow % 2 == 0) //если степень кратна 2
    {
        $toSquare = bin_power($num, $pow / 2, $modulo); //посчитаем число в степени в 2 раза меньше
        return $toSquare * $toSquare % $modulo; //возведем в квадрат
    }
    else //иначе
        return ($num * bin_power($num, $pow - 1, $modulo)) % $modulo; //число * на число в степени меньшей на 1
}
?>