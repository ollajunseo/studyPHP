<?php
echo time(); // 사람이 인지하기 힘든 시간
echo "<br>";

echo "현재 시간은" . date("Y년 m월 d일 H시 i분 s초", time());
echo "<br>";

echo "2020년 01월 01일 9시 15분 10초의 타임 스탬프는 ?";
echo "<br>";
//mktime(시,분,초,월,일,년)

$timeStamp = mktime(9, 15, 10, 1, 1, 2023);
echo $timeStamp;

?>
