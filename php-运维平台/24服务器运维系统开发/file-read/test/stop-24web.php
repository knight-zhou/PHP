<?php 
/*
模拟进行停止resin
*/
$filename="11.txt"; 
$fp=fopen("$filename", "w+"); //打开文件指针，创建文件 
//echo "你要stop掉 24web的resin，请点击返回 返回到上一个页面查看resin的pid是否还存在";

if ( !is_writable($filename) ){ 
die("文件:" .$filename. "不可写，请检查！"); 


} 
//fwrite($filename, "anything you want to write to $filename."; 
fclose($fp); //关闭指针 

//上面的代码执行后最后执行网址重定向。

header("Location: http://127.0.0.1/file-read/shuzu-read.php"); 
//确保重定向后，后续代码不会被执行 
exit;
?>
<!--
<input type="button" name="button" id="button" value="返回上一个页面" onClick="location.href='http://127.0.0.1/file-read/shuzu-read.php'" />
-->