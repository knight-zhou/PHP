<?php
	if(isset($_POST["submit"]))
	{
		$user = $_POST["username"];
		$psw = $_POST["password"];
		if($user == "" || $psw == "")
		{
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
		}
		else
		{
			mysql_connect("localhost","root","root");
			mysql_select_db("yypt");
			mysql_query("set names 'gbk'");
			$sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";
			$result = mysql_query($sql);
			$num = mysql_num_rows($result);
			$row = mysql_fetch_array($result);
//登录验证通过之后进行页面跳转			
		echo "<script>alert('登录成功!');location='src/main.php';</script>";
		
			
			if($num)
			{
				$row = mysql_fetch_array($result);	//将数据以索引方式储存在数组中
				
				
			}
			else
			{
				echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";
	}

?>