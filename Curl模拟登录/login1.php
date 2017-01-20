<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 


$mysqli=mysqli_connect("localhost","root","root","logindb");
$name=$_POST["name"]; 
$passowrd=$_POST["password"]; 
//print_r($_COOKIE);

if ($name && $passowrd){ 
$sql = "SELECT * FROM test1 WHERE name='$name' and password='$passowrd'"; 
$res = mysqli_query($mysqli,$sql); 
$rows=mysqli_num_rows($res); 
if($rows == '1'){ 
//header("location:login1.php"); 
//exit; 
echo "success";

//echo函数单纯显示文本信息或变量值，没有返回值
//print(包括printf,sprintf)函数除了显示之外，还会返回一个布尔值

}
 else{

 //return "fdaf";
echo "failed，please check username and password！";
}
mysqli_free_result($res);
mysqli_close($mysqli);
}
?> 