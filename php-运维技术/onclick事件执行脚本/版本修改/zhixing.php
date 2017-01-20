
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title> 
<?php 
 echo "hello";
 //print  "hello";
 /*
 本页面使用ajax执行php脚本。但是不进行页面跳转
 
 */
 ?>

</title>


<!--  
微软引用 jQuery
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js">
</script>


-->

<script src="jquery-1.8.0.js"></script>

</head>

<body>



<div id=localrefresh style='border:1px solid red;margin-bottom:80px;'>这里是局部刷新位置</div>
<input type="button" value=你要停止掉24的web服务器吗？ onClick="test()"/>

<script type="text/javascript">
function test(){

//下面这一段是弹出窗口
	alert("你确定要停止24的web吗？")

$.ajax({
  type: "get", 
 // url: "http://127.0.0.1/ajax-test/tt/stop-24web.php", url执行接执行的访问路径
    url: "tt/stop-24web.php",

	/*
	这一段注释这一段表示返回结果，可以认为是回掉函数。 
  success: function(data){
    $("#localrefresh")[0].innerHTML=data;
  }
  */
 
});
}

</script>
</body>
</html>
