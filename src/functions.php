<?php

function task1($words, $parOut = false)
{
    $optionText = '';
    $result = '';

    if ($parOut == false) {
        $optionText = '<p>';
    }

    for ($i = 0; $i < count($words); $i++) {
        $result .= $optionText . $words[$i];
    }
    return $result;
}

function task2()
{
    $parametrs = func_num_args();
    $arg_list = func_get_args();
    $result = $arg_list[1];

    for ($i = 2; $i < $parametrs; $i++) {
        switch ($arg_list[0]) {
            case '+':
                $result += $arg_list[$i];
                break;
            case '-':
                $result -= $arg_list[$i];
                break;
            case '*':
                $result *= $arg_list[$i];
                break;
            case '/':
                $result /= $arg_list[$i];
                break;
            default:
                break;
        }
    }
    echo $result . ' ';
}

function task3($numberOne, $numberTwo)
{
    if (is_int($numberOne) and is_int($numberTwo) == true) {
        echo '<table style border="2">';
        for ($tr = 1; $tr <= $numberOne; $tr++) {
            echo '<tr style="text-align: center">';
            for ($td = 1; $td <= $numberTwo; $td++) {
                echo '<td>' . $tr * $td . '</td>';
            }
        }
        echo '</table>';
    } else {
        echo 'Ошибка!';
    }
}

function task4()
{
    $dataNow = date('d.m.Y H:i');
    return $dataNow;
}

function task5()
{
    $dataCurrent = strtotime('24.02.2016 00:00:00');
    return $dataCurrent;
}

function task6($str, $strDel)
{
    $strIns = '';
    $resultStr = str_replace($strDel, $strIns, $str);
    return $resultStr;
}

function task7($str, $strDel, $strIns)
{
    $resultStr = str_replace($strDel, $strIns, $str);
    return $resultStr;
}

function task8()
{
    $fileText = '“Hello again!”';
    file_put_contents('test.txt', $fileText);
    echo 'файл записан!';
}

function task9()
{
    echo file_get_contents('test.txt');
}
