<?php
function checkInt ($intCheck){
    $check = filter_var($intCheck, FILTER_VALIDATE_INT);
    if ($check){
        echo "{$intCheck}는 정수일껄요"."<br>";
    }else{
        echo "{$intCheck}는 정수가 아닐껄요"."<br>";
    }
}
checkInt(30);
checkInt(30.23);


?>
