<?php

$str = "everland";
$cutStr = substr($str, -4, 4);
echo $cutStr;
echo "<br>";
echo '첫글자가 영문인 경우' . ucfirst($str);
echo "<br>";

$str = 'ever,  never, luka';
echo ucwords($str);
echo "<br>";

$str = 'web developer';
$findStr = 'd';
$pos = strpos($str, $findStr);
echo "문자열 {$findStr}의 위치는: ".$pos;
echo "<br>";

if (isset($lll)){
    echo "변수가 선언되었습니다";
}else{
    echo "변수가 선언되지 않았습니다";
    echo "<br>";
}

$str = 20;
if (isset($str)){
    echo "변수가 선언되었습니다";
    echo "<br>";
}else{
    echo "변수가 선언되지 않았습니다";

}

$val = "true";
echo "변수 val의 데이터 형은 :" . gettype($val);
echo "<br>";
settype($val, 'bool');
echo "변수 val의 데이터 형은:" . gettype($val);
echo "<br>";
var_dump($val);

phpinfo();
?>
