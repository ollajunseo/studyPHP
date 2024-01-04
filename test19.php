<?php
$open = fopen('test1.php', 'a+');

if ($open){
    echo "파일을 열었습니다";
    echo "<br>";
}else{
    echo "파일을 열지 못했습니다";
}

$fileName = "helloworld.txt";
if (file_exists($fileName)){
    $fopen = fopen($fileName, 'r');
    if ($fopen){
        // 파일 읽기
        $fread = fread($fopen, filesize($fileName));
        if ($fread){
            echo $fread; // 내용출력
            fclose($fopen);

        }else{
            echo "파일 읽기에 실패했습니다";
        }
    }else{
        echo "파일 열기에 실패했습니다 ";
    }

}else{
    echo "파일이 존재하지 않습니다";
}


$fileName = "helloworld.txt";

if (file_exists($fileName)){

    $fopen = fopen($fileName, 'r');
    $readByte = 512;
    if ($fopen){
        while ($fgets = fgets($fopen, $readByte)) {
            echo $fgets . "<br>";


        }
    }



}


?>
