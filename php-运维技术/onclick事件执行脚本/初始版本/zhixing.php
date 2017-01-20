
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
<form>
<TABLE WIDTH=75% BORDER=1 CELLSPACING=1 CELLPADDING=1>
<TR>
<TD><input type=text id=a name=a /></TD>
<TD><input type=text id=b name=a /></TD>
</TR>
<TR>
<TD><input type=text id=c name=a /></TD>
<TD><input type=text id=d name=a /></TD>
</TR>
</TABLE>
</form>
<div id=localrefresh style='border:1px solid red;margin-bottom:80px;'>这里是局部刷新位置</div>
<input type="button" value=点击执行php脚本 onclick="test()"/>

<script type="text/javascript">
function test(){
$.ajax({
  type: "get", 
 // url: "http://127.0.0.1/ajax-test/tt/stop-24web.php", url执行接执行的访问路径
    url: "tt/stop-24web.php",
  success: function(data){
    $("#localrefresh")[0].innerHTML=data;
  }
});
}

</script>
</body>
</html>
