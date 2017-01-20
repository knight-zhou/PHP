本文主要讲解使用webbench  结合php 来压测redis。
为了证明above Twemproxy 上有个lvs，但是redis客户端连接lvs 有很多timeout的情况。
解决方法是：使用tw的 tcp-keepalive选项。

https://github.com/twitter/twemproxy/issues/329

为了能更好的学习现在使用webbench 结合php来压测redis，尝试自己写压测代码。

-----------------------------------------------------------
webbench安装请看如下：

http://zyan.cc/post/288/

看测试结果：
------------------------------------------------
[root@QD1 /]# webbench -c 500 -t 30 http://192.168.2.95/set.php
Webbench - Simple Web Benchmark 1.5
Copyright (c) Radim Kolar 1997-2004, GPL Open Source Software.

Benchmarking: GET http://192.168.2.95/set.php
500 clients, running 30 sec.

Speed=36876 pages/min, 127022 bytes/sec.
Requests: 18409 susceed, 29 failed.
---------------------------------------------------------------
由于set.php最后并没有加close redis选项。等压测完了之后。很多ESTABLISHED 状态。
php代码为set.php

netstat -ano | grep 6379 | wc -l
netstat -ano | grep 6379  | grep ESTABLISHED | wc -l
netstat -ano | grep 6379  | grep TIME_WAIT | wc -l

客户端主动关闭连接时，会发送最后一个ack后，然后会进入TIME_WAIT状态，再停留2个MSL时间(后有MSL的解释)，进入CLOSED状态。
压测完了之后我们会发现ESTABLISHED 和 TIME_WAIT 将消失.
导致被压测服务器很卡,如果采用500个链接 导致服务器卡死（256M内存）

[root@HD2 html]# netstat -ano | grep 6379  | grep TIME_WAIT | wc -l
2048
[root@HD2 html]# netstat -ano | grep 6379  | grep ESTABLISHED | wc -l
4

---------------------------------------------------
现在尝试一下在操作redis时候，最后加上close redis语句 。php代码为get.php.
结果跟没加close是一样的。

