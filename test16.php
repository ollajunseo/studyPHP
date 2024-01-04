<?php
   function checkEmail($email){
       $emailCheck = filter_var($email, FILTER_VALIDATE_EMAIL);
       $bool = false;

       if ($emailCheck){
           $bool = true;
       }
       return $bool;
   }

$email = "yjs990305@gmail.com";
   if (checkEmail($email)){
       echo "이메일이 올바릅니다";
   }else{
       echo "이메일이 올바르지 않습니다";
   }
echo "<br>";

   function check ($checkUrl){
       $UrlCheck = filter_var($checkUrl, FILTER_VALIDATE_URL);
       $info = false;

       if ($UrlCheck){
           $info = true;
       }
       return $info;


   }

$checkUrl = "http://www.naver.com";
   if (check($checkUrl)){
       echo "올바른 url입니다";
   }else{
       echo "올바르지 않은 url입니다";
   }
echo "<br>";

$ip = '192.179.0.2';
$ipCheck = filter_var($ip, FILTER_VALIDATE_IP);

if($ipCheck){
    echo "올바른 ip입니다";
}else{
    echo "올바르지 않은 ipA입니다";
}



?>
