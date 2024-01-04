<?php

include "test12.php";
echo "<br>";

require "./test12.php";
echo "<br>";

$pattern = '/^i$/';
$str = "i";

if (preg_match($pattern,$str,$match)){
    echo "값 {$str}은 정규표현식에 적합한 값입니다";
    echo "<pre>";
    var_dump($match);
    echo "</pre>";
}else{
    echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인";
}


$patt = '/^i+$/';
$num1 = "ii";

if (preg_match($patt,$num1,$match2)){
    echo "값 {$num1}은 정규표현식에 적합한 값입니다";
    echo "<pre>";
    var_dump($match2);
    echo "</pre>";
}else{
    echo "이름에 특수문자 , 한글 또는 숫자가 있는지 확인요망";
}
// 값이 모두 한글로 되어있는지 확인하는 예제

$pattern = '/^[가-힣]{3,15}/';
$str = "何も言わない";

if (preg_match($pattern,$str,$newKorean)){
    echo "{$str}는   한국어로만 구성되어있습니다 ";
    echo "<pre>";
    var_dump($newKorean);
    echo "</pre>";

}else{
    echo "영어혹은 승민이는 바보인지 검사하시오";
}
?>



