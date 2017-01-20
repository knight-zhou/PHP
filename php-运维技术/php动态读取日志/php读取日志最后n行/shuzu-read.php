<?php
/*
利用数组来实现读取文件最后的n行

*/
$num=10;    //表示读取最后n行
$file="D:/phpStudy/WWW/file-read/file.txt";  //读取指定的文件
//echo $file;

//$fh = fopen('file.txt','r');
$fh = fopen("$file",'r');

$r = array();
while($l = fgets($fh)){
array_push($r,$l);
if(count($r)>$num){
array_shift($r);
}
file_put_contents('memory.txt',memory_get_usage());
}

//var_dump($r);
//echo $r;

//访问数组成员

for($i=0;$i < count($r);$i++) {

echo $r[$i].'<br />';    //换行符

}



?>