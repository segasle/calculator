<?php
/**
 * Created by PhpStorm.
 * User: sergej
 * Date: 13.03.19
 * Time: 17:13
 */
//$out='';
if (isset($_POST['submit'])) {
    $data = $_POST;
    if (!empty($data['number1']) and !empty($data['number2'])) {
        if ($data['signs'] == 'minus') {
            $out = $data['number1'] - $data['number2'];
            echo $out;
        }
        if ($data['signs'] == 'plus') {
            $out = $data['number1'] + $data['number2'];
            echo $out;
        }
        if ($data['signs'] == 'division') {
            $out = $data['number1'] / $data['number2'];
            echo $out;
        }
        if ($data['signs'] == 'multiplications') {
            $out = $data['number1'] * $data['number2'];
            echo $out;
        }
    }
}