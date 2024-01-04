<?php
$pattern = '/^[0-9]+$/';
$let = "123444";

if (preg_match($pattern,$let,$num)){
    echo "{$let}은 정규표현식입니다";
    echo "<pre>";
    var_dump($num);
    echo "</pre>";

}else{
    echo "정규표현식이 아닙니다";

}

$pattern = '/^(010|011|016|017|018|019)-[^0][0-9]{3,4}-[0-9]{4}/';
$number = '010-6205-2291';

if (preg_match($pattern, $number, $check)) {
    echo "{$number}은 휴대폰 유효성 검사가 완료되었습니다";
    echo "<pre>";
    var_dump($check);
    echo "</pre>";
}else{
    echo "휴대폰 번호가 잘못되었습니다";
}

// 이메일 유효성 검사
//패턴 대입
$pattern = '/[a-zA-Z]{1}[a-zA-Z0-9.\-_]+@[a-z0-9]{1}[a-z0-9\-]+[a-z0-9]\.(([a-z]{1}[a-z.]+[a-z{1})|[a-z]+))$/';
$check = "yjs990305@gmail.com";

if (preg_match($pattern, $check, $email)) {
    echo "{$check}는 이메일 유효성 검사가 완료되었습니다 ";
    echo "<pre>";
    var_dump($email);
    echo "</pre>";

}else{
    echo "틀렸습니다";
}
?>

