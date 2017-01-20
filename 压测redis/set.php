
<?php  
$redis = new redis();  
$redis->connect('127.0.0.1', 6379);  
$result = $redis->set('name',"abc1");  
var_dump($result);    //结果：bool(true)  
//echo xx;
?>  
