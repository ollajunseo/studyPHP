<?php
$randomNum = rand(1, 3);
$num = "";

switch ($randomNum) {
    case 1:
        $num = '가위';
        break;
    case 2:
        $num = '바위';
        break;
    case 3:
        $num = '보';
        break;
    default:
        $num ="";
        break;
}
echo "나는 이걸 낼 것이다 !" . $num;
echo "<br>";

function printHello(){
    echo "HelloWorld";
}
printHello();
echo "<br>";


function sum($num1, $num2){ // 여기서 num 1 이랑 num 2 는 파라미터임  전달해준 값을 받는 곳
    $sum = $num1 + $num2;
    echo $sum;
    echo "<br>";
}
sum(2,3); // 여기서 2와 3은 아규먼트임 값을 전달하는 것
echo "<br>";

function song ($num1 , $num2){
    $sum1 = $num1 + $num2;
    return $sum1;

    echo "작동되면 안됩니다";
}

echo song(10, 5);

$plus = song(10, 5);
echo "<br>";
echo $plus + 20;


?>
