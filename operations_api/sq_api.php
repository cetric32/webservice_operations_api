<?php
header('Access-Control-Allow-Origin: *'); // allow hosts to access the api
header('Content-Type: application/xml; charset=utf-8'); //xml data

if(isset($_GET['num1']) &&
isset($_GET['num2']) &&
isset($_GET['num3'])
)
{
    $number1 = $_GET['num1'];
    $number2 = $_GET['num2'];
    $number3 = $_GET['num3'];

    //squares
    $num1_square = $number1 * $number1;
    $num2_square = $number2 * $number2;
    $num3_square = $number3 * $number3;

    //squareroots
    $num1_sqrt = sqrt($number1);
    $num2_sqrt = sqrt($number2);
    $num3_sqrt = sqrt($number3);


    $result = "<?xml version='1.0' encoding='UTF-8'?>
    <results>
        <squares>
            <number1>$num1_square</number1>
            <number2>$num2_square</number2>
            <number3>$num3_square</number3>
        </squares>
        <squareroots>
            <number1>$num1_sqrt</number1>
            <number2>$num2_sqrt</number2>
            <number3>$num2_sqrt</number3>
        </squareroots>
    </results>";

   echo $result;
}
else
{
    $result = "<?xml version='1.0' encoding='UTF-8'?>
    <results>
     <error>'Wrong GET parameters! Refer to the api documentation on the usage'</error>
    </results>";

    echo $result;
}
?>