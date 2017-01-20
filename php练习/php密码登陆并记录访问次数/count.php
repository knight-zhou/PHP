<?php
//               PHP·Ã¿Í¼ÆÊýÆ÷
function num()
{
	if(!file_exists("n.txt"))
	{
		$fp=fopen("n.txt","w");
		fwrite($fp,"1");
		fclose($fp);
		$n=1;
	}
	else
	{
		$fp=fopen("n.txt","r");
		$n=fgets($fp);
		fclose($fp);
		$n++;
		$fp=fopen("n.txt","w");
		fwrite($fp,$n);
		fclose($fp);
	}
	return $n;
}
?>