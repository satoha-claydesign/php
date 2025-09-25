<?php
// function outputNumber($a)
// {
//   echo "引数の値は" . $a . "です";
//   return;
// }

// outputNumber(2);

// function outputHello()
// {
//   echo "Hello world";
// }
// outputHello(); //

echo "<br />";

// function text($number1, $number2)
// {
//   $value = $number1 * $number2;
//   return $value;
// }

// $total = text(1, 5);
// echo $total;

// function addNumber($score1, $score2, $score3)
// {
//   $totalScore = $score1 + $score2 + $score3;
//   return $totalScore;
// }

// $total = addNumber(80, 90, 45);
// if ($total >= 210){
//     echo "合計点は". $total . "点 なので合格です";
// }
// else{
//     echo "合計点は". $total . "なので不合格です";
// }

function triangleArea($base, $height)
{
    $triArea = $base * $height * 0.5;
    return $triArea;
}
$sankaku = triangleArea(3, 6);
echo $sankaku;

echo "<br>";
function trapezoidArea($topBase, $bottomBase, $height)
{
    $trapArea = ($topBase + $bottomBase) * $height * 0.5;
    return $trapArea;
}
$daikei = trapezoidArea(4, 8, 4);
echo $daikei;

echo "<br>";

function rectangleArea($length, $width)
{
    $recArea = $length * $width;
    return $recArea;
}
$choho = rectangleArea(4, 9.5);
echo $choho;