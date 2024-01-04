<?php
$pattern = '/^[A-Z]+$/';
$level = 'IAMAGOODBOY';

if (preg_match($pattern, $level, $nextLevel)) {
    echo "{$level}은 대문자로만 구성되어있습니다";
    echo "<pre>";
    var_dump($nextLevel);
    echo "</pre>";

}else{
    echo "{$level}은 대문자로만 구성되어 있지 않으니 확인해주세요";
}


$psy = '/^[a-zA-z가-힣]+$/';
$word = "아무노래ziCo3";

if (preg_match($psy,$word,$song)){
    echo "{$word}는 정규표현식이 맞습니다람쥐승민";
    echo "<pre>";
    var_dump($song);
    echo "</pre>";

}else{
    echo "정규표현식이 아닙니다";
    echo "<br>";
}

$pattMatt = '/^[a-zA-z가-힣. ]+$/';
$patt = "오늘밥 소고gi.";

if (preg_match($pattMatt, $patt,$www)){
    echo "{$patt}는 정규표현식입니다";
    echo "<pre>";
    var_dump($www);
    echo "</pre>";

}else{
    echo "정규 표현식이 아닙니다";
}



?>