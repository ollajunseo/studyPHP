<?php


$earth = array();
$earth['nation'] = array();
$earth['nation'][0] = 'korea';
$earth['nation'][1] = 'japan';

echo $earth['nation'][1];
echo "<br>";


$fruit = array();
array_push($fruit, 'apple', 'lemon', 'orange');

echo $fruit[0];
echo "<br>";
echo $fruit[1];
echo "<br>";
echo $fruit[2];
echo "<br>";

echo '<pre>';
var_dump($fruit);
echo '<pre>';
echo "<br>";

$game = array();
$game = ['lol', 'valo', 'maple'];

list($first, $second, $thrid) = $game;
echo $first;

$num = range(1, 10);

echo '<pre>';
var_dump($num);
echo '<pre>';
echo "<br>";

$arr = range(1, 20, 3);
echo "배열 변수 arr 의 값의 개수는" . count($arr);
echo "<br>";

$lol = 12;
echo "\$lol의 데이터형(값{$lol}은" . gettype($lol);
echo "<br>";

$reach = true;
echo gettype($reach);
echo "<br>";

$korean = "문자열";
echo "데이터형 변경 전의 데이터형" . gettype($korean);
echo "<br>";

$korean = (int)$korean;
echo $korean;
echo "<br>";
echo "데이터형 변경 후의 데이터형" . gettype($korean);









?>
