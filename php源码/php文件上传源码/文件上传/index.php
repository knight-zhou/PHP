<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP将上传文件到指定目录</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
选择文件：<input type="file" name="upfile" />
<input type="submit" name="sub" value="上传" />
</form>
<?php
if(isset($_POST['sub'])){    // isset()函数判断提交按钮值是否存在
  if(!is_dir("file_upload")){     // is_dir()函数判断指定的文件夹是否存在
    mkdir("file_upload");         // mkdir()函数创建文件夹
  }
  $file=$_FILES['upfile'];   // 获取上传文件
  if(is_uploaded_file($file['tmp_name'])){   // 判断上传是不是通过HTTP POST上传的
    $str=stristr($file['name'],'.');         // stristr()函数获取上传文件的后缀
    // strtotime()函数定义一个Unix时间戳
    $path="file_upload/".strtotime("now").$str;   // 定义上传文件的存储位置
    if(move_uploaded_file($file['tmp_name'],$path)){   // 执行文件上传操作
      echo "上传成功，文件名称为：".strtotime("now").$str;
    }
  }
}
?>
</body>
</html>