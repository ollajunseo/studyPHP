<?php
setcookie("memberId", "hello", time() + 3600, '/');

if (isset($_COOKIE['memberId'])){
    echo "쿠키 memberId 의 값은 " . $_COOKIE['memberId'];
    echo "<br>";
}else{
    echo "쿠키의 값이 없습니다";
}

setcookie("min", "승민이는 바보", time() + 3600, '/');

if (isset($_COOKIE['min'])){
    echo "쿠키 승민이의 값은 " . $_COOKIE['min'];
}else{
    echo "승민이의 쿠키";
}
//쿠키를 삭제하는 방법
setcookie("memberId", "hello", time() - 100,'/');

?>

