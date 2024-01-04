<?php


$startTime = mktime(0, 0, 0, 1, 3, 2024);
$endTime = mktime(0, 0, 0, 1, 4, 2024);

$nowTime = time();

if ($nowTime >=$startTime && $nowTime<=$endTime){
    echo "현재 이벤트에 참여할 수 있는 시간입니다";
    echo "<br>";
}else{
    echo "현재는 이벤트에 참여하실 수 없습니다";
    echo "<br>";
}

$year = 2024;
$month = 1;
$day = 3;

// 특정 날짜의 타임 스탬프 구하기

$targetTime = mktime(0, 0, 0, $month, $day, $year);
$dayOfWeek = date('w', $targetTime);

$secondOfDay = 60 * 60 * 24;

switch ($dayOfWeek) {
    case 1:
        $monday = $targetTime;
        $friday = $targetTime + ($secondOfDay * 4);
        break;
    case 2:
        $monday = $targetTime - ($secondOfDay * 1);
        $friday = $targetTime + ($secondOfDay * 3);
        break;
    case 3:
        $monday = $targetTime - ($secondOfDay * 2);
        $friday = $targetTime + ($secondOfDay * 2);
        break;
    case 4:
        $monday = $targetTime - ($secondOfDay * 3);
        $friday = $targetTime + ($secondOfDay * 1);
        break;
    case 5:
        $monday = $targetTime - ($secondOfDay * 4);
        $friday = $targetTime;
        break;

}
if (isset($monday) && isset($friday)){
    echo "{$year}년 {$month}월 {$day}일이 있는 주의 월요일과 금요일의 날짜 ";
    echo "<br>";
    echo "월요일:".date('Y-m-d',$monday);
    echo "<br>";
    echo '금요일:' . date('Y-m-d', $friday);
}else{
    echo "월요일부터 금요일의 날짜를 입력하세요";
}


?>

