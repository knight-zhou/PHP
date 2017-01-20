<?php 
$filename="11.txt"; 
$fp=fopen("$filename", "w+"); //打开文件指针，创建文件 

//echo "你要stop掉 24web的resin，请点击返回 返回到上一个页面查看resin的pid是否还存在";


if ( !is_writable($filename) ){ 
die("文件:" .$filename. "不可写，请检查！"); 


} 
//fwrite($filename, "anything you want to write to $filename."; 
fclose($fp); //关闭指针 


?>
