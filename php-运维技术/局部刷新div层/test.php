

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title> 
<?php 
 echo "hello";
 //print  "hello";
?>

 </title>


<!--  
微软引用 jQuery，也可以自己下载，
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
<input type="button" value="刷新div" onclick="test()"/>

<script type="text/javascript">
function test(){
$.ajax({
  type: "get", 
  url: "data.txt", 
  success: function(data){
    $("#localrefresh")[0].innerHTML=data;
  }
});
}

</script>
</body>
</html>
