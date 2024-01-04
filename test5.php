<?php
$sum = 0;
$num = 1;

while ($num <= 10){
    $sum += $num;
    $num++;
}
echo "1부터 10까지의 합은 {$sum}입니다";
echo "<br>";

do {
    echo "이 문구는 1회만 출력되어야지 정상입니다.";
} while (false);
echo "<br>";

$i = 1;
do {

    echo "안녕하세요<br>";
    $i++;
} while ($i <= 5);

$str = " 여백 제거기 ";
echo '|'.trim($str).'|';
echo "<br>";
echo '|' . ltrim($str) . '|';
echo "<br>";
echo '|' . rtrim($str) . '|';
echo "<br>";


$str1 = 'everland';
echo strtoupper($str1);
echo "<br>";

$str2 = 'EVERLAND';
echo strtolower($str2);
echo "<br>";

$str = "beanscent";
echo "문자열 수 : ".strlen($str);
echo "<br>";

$str = " b e a n s e n t ";
echo "문자열 수:" . strlen($str);
echo "<br>";

$str = 'welcome to everland';
$changeWord = str_replace('everland', 'valolant', $str);
echo $changeWord;
echo "<br>";
?>

