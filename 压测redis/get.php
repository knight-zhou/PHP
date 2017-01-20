<?php
$redis = new Redis(); #实例化redis类
$redis->connect('127.0.0.1'); #连接服务器
$redis->set('key', 'hello '); #调用方法，设置string类型值
$redis->append('key', 'world'); #修改string类型值
echo $redis->get('key');  #获取redis key的值，并输出显示 
echo $redis->type('key'); #获取key 的数据类型
echo $redis->echo('will close...');# 输出字符串
$redis->close(); #关闭连接

//脚本结束的时候，资源都被释放了,一般都不写close。

?>
