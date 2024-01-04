<?php
session_start();

// 세션 생성

//$_SESSION['userId'] = "everland";
//if (isset($_SESSION['userId'])){
//    echo "세션 생성 완료 세션 userId의 값 " . $_SESSION['userId'];
//}else{
//    echo "세션 생성이 실패했습니다";
//}





//if (isset($_SESSION['userId'])){
//    echo "userId 의 세션이 존재합니다 ";
//
//    unset($_SESSION['userId']);
//}else{
//    "userId의 세션이 존재하지 않습니다";
//}
//echo "<br>";
//echo "userId 세션의 값: " . $_SESSION['userId'];


$_SESSION['song'] = "ppoddang";
$_SESSION['seong'] = "ena";
$_SESSION['min'] = "mo";

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

if (session_destroy()){

    echo "세션 삭제완료";
}else{
    echo "세션 삭제불가";
}

show_source("../day2/test10");
?>
