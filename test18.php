<?php

$float = 123.12;
$floatCheck = filter_var($float, FILTER_VALIDATE_FLOAT);

if ($floatCheck){
    echo "{$float}는 실수가 맞습니다";
}else{
    echo "{$float}는 실수가 아닙니다 ";
}

$makeDir = "example";
//$dir = mkdir($makeDir, '777');
if ($dir){
    echo "폴더가 생성되었습니다 ";

}else{
    "폴더가 생성되지 않았습니다 ";
}

$folderName = "example";
$check = is_dir($folderName);

if ($check){
    echo "폴더가 있습니다 ";
    echo "<br>";
}else{
    echo "폴더가 없습니다";
}

$folderName = "example";
$openFolder = opendir($folderName);

if ($openFolder){
    echo "{$folderName} 을 열었습니다 ";
    echo "<br>";
}else{
    echo "{$folderName}을 열지 못했습니다 ";
}

/*rmdir('example');

if (is_dir('example')){
    echo "폴더가 존재합니다";
}else{
    echo "폴더가 존재하지 않습니다";
}*/


?>
