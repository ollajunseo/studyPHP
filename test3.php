<?php
$num1 = 30;
$num2 = 20;

if ($num1 != $num2){
    echo "두 변수의 값이 다릅니다";
}else{
    echo "두 변수의 값이 같습니다";
}
echo "<br>";

$gender = "girl";
$place = "land";

if ($gender == "girl" && $place == "ever"){
    echo " 소녀는 ever를 좋아합니다";
} else if ($gender == "girl" && $place == "land") {
    echo "소녀는 land를 좋아합니다";
} else{
    echo "소녀는 아무곳도 가지않고 싶습니다";
}
echo "<br>";

$lilia = "valodant";

switch ($lilia) {
    case 'valolant':
        echo "발로란트";
        break;

    case 'liver':
        echo "리버풀";
        break;

    default:
        echo "없네요";
        break;

}

for ($i = 1; $i <=10; $i++) {
    echo $i.',';
}
echo "<br>";
$sum = 0;
$maxValue = 50;
for ($i =1; $i<=$maxValue; $i++){
    if ($i % 2 == 0) {
        $sum += $i;
    }
}
echo "누적합은" . $sum;
echo "<br>";

for ($i = 1; $i < 10; $i++){
    if ($i == 5) {
        break;
    }
    echo $i.',';
}
echo "<br>";
for ($i = 1; $i < 10; $i++){
    if ($i == 5) {
        continue;
    }
    echo $i.',';
}





?>
