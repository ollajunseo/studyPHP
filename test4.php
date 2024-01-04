<?php
for ($i = 1; $i <=3; $i++){
    echo "바깥쪽 for문 횟수:{$i}";

    for ($n = 0; $n <3; $n++){
        echo "안쪽 for문 횟수:{$n}";
    }
    echo "<br>";
}

for ($i =1; $i<=3; $i++){
    echo "{$i}단";
    echo "<br>";

    for ($n = 1; $n <=9; $n++){
        $mul = $i * $n;
        echo "{$i} X {$n} = {$mul}<br>";
    }
}

$memberList = ['준서', '혱이', '삼겹살', '소주'];
foreach ($memberList as $ml){
    echo $ml;
    echo "<br>";
}

$memberList =[];
$memberList[0] = ['name' => '준서', 'ID' => 'wnstj'];
foreach ($memberList as $ml1){
    echo "이름 :".$ml1['name'];
    echo "ID :".$ml1['ID'];
    echo "<br>";
}

$memberList = [];
$memberList = ['name' => '준서', 'ID' => 'wnstj1010'];
foreach ($memberList as $index => $value){
    echo "인덱스의 값{$index} :" . $value;
    echo "<br>";
}

$member[0] = ['name' => '삽살개', 'id' => 'lemon'];
$member[1] = ['name' => '딩고', 'id' => 'dingo'];
$member[2] = ['name' => '바보', 'id' => 'lala'];
$member[3] = ['name' => '풍산개', 'id' => 'dog'];

foreach ($member as $index => $value){
    foreach ($value as $index2 => $value2){
        if ($index2 == 'name'){
            echo "{$value2}님의아이디는 :";
        }
        if ($index2=='id'){
            echo "{$value2}입니다";
        }
    }
    echo "<br>";
}



?>
