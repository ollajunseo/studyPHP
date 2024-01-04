<?php
function bobo($param1 = 100,$param2 = 50 ){
    $sum = $param1 + $param2;
    return $sum;
}

echo "두 개의 파라미터가 모두 있을 때: " . bobo(5, 19);
echo "<br>";
echo bobo(5);
echo "<br>";
echo bobo();



?>


