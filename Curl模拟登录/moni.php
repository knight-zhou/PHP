<?php
/*
以下是模拟登录,$post_data 填写用户名和密码
*/
$url = "http://127.0.0.1/gongji2/login/login1.php";

$post_data= array(
    "name" => "knightd",
    "password" => "knight",
);
	//$post_data = array ("s"=>'success');
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
	$output = curl_exec($ch);
	curl_close($ch);
	echo $output;
?>