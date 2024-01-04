<?php
$nowTime = getdate();
echo "현재년도 : " . $nowTime['year'] . "<br>";
echo "현재 월 : " .$nowTime['mon'] ."<br>";
echo "현재 일 : " .$nowTime['mday'] ."<br>";
echo "현재 시 : " .$nowTime['hours'] ."<br>";
echo "현재 분 : " .$nowTime['minutes'] ."<br>";
echo "현재 초 : " .$nowTime['seconds'] ."<br>";
echo "현재 요일 숫자 : " .$nowTime['wday'] ."<br>";
echo "현재 요일 문자 : " .$nowTime['weekday'] ."<br>";
echo "현재 월 문자 : " .$nowTime['month'] ."<br>";
echo "현재 시간 타임스탬프 : " .$nowTime[0] ."<br>";
echo "올해의 일차 : " .$nowTime['yday'] ."<br>";


$dateCheck = checkdate(2, 29, 2024);
if($dateCheck){
    echo "유효한 날짜입니다";
    echo "<br>";
}else{
    echo "유효하지 않은 날짜입니다,";
}

echo microtime();
echo "<br>";
echo microtime(true);
echo "<br>";

$arr = range(1, 1000);
echo "가장큰수 : " . max($arr);
echo "<br>";

$arr = [3, 5, 2, 66, 3432, 3432, 556, 34];
echo "가장 작은 수 : " . min($arr);
echo "<br>";

$math = 12434.23;
echo "반올림하기 : " . round($math, 0);
echo "<br>";

$num = 12.34;
$floor = floor($num);
echo "실수를 버린 수는 : " . $floor;
echo "<br>";

$num = 12.66;
$ceil = ceil($num);
echo "실수를 올림 한 수는 : " . $ceil;
echo "<br>";

$num = 123456789;
echo number_format($num);
echo "<br>";

$num = 1234567.342;
echo number_format($num, 4,"^","%");






?>
