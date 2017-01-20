
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 

$mysqli=mysqli_connect("localhost","root","root","logindb");
$name=$_POST["name"]; 
$passowrd=$_POST["password"]; 
if ($name && $passowrd){ 
$sql = "SELECT * FROM test1 WHERE name='$name' and password='$passowrd'"; 
$res = mysqli_query($mysqli,$sql); 
$rows=mysqli_num_rows($res); 
if($rows){ 
//header("location:login1.php"); 
//exit; 
echo "登录成功";
}
 else{
echo "登录失败，请检查用户名和密码";
}
mysqli_free_result($res);
mysqli_close($mysqli);
}
?> 