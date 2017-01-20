<?php

/*
调用linux命令行
php -发test.php
*/

$file = 'file.txt';
$file = escapeshellarg($file); // 对命令行参数进行安全转义
$line = `tail -n 10 $file`;

echo $line; 



?>
