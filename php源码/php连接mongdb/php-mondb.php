<?php
   // 连接到mongodb
 $conn = new Mongo("192.168.2.92:27017");
  echo "Connection to database successfully";
   // 选择一个数据库
 	$db = $conn->test;
   echo "Database test selected";
   //创建集合
/*    $collection = $db->createCollection("mycol");
   echo "Collection created succsessfully";
 */
   //选择集合
   $collection = $db->mycol;
   
//插入文档
/*     $document = array(
   		"title" => "MongoDB",
   		"description" => "database",
   		"likes" => 100,
   		"url" => "http://github.com/knight-zhou/mongodb/",
   		"by", "knight.ren"
   );
   $collection->insert($document);
   echo "Document inserted successfully"; */
   
//查找文档
$collection = $db->mycol;  
echo "Conllection selected successfullly"; 

$dis = $collection->findOne();

//显示集合中的数据
//var_dump()方法是判断一个变量的类型与长度,并输出变量的数值,如果变量有值输的是变量的值并回返数据类型.
var_dump($dis);


//迭代显示文档标题
/* foreach ($cursor as $document) {
	echo $document["title"] . "\n";
}
 */

//更新文档

// 更新文档
$collection->update(array("title"=>"MongoDB"), array('$set'=>array("title"=>"MongoDB Tutorial")));
echo "Document updated successfully";
// 显示更新后的文档
$cursor = $collection->find();
   
// 移除文档

$collection->remove(array("title"=>"MongoDB Tutorial"));
echo "Documents deleted successfully";
 
// 显示可用文档数据
$cursor = $collection->find();
   
?>