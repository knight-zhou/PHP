<?php
/*
 * 使用微妙计算php脚本的执行时间
 * 
 * */
class Timer {
	private $startTime = 0;
	private $stoptTme = 0;
	function start() {
		$this->startTime = microtime(true);
		}
	function stop(){
		$this->stopTime = microtime(true);
	}	
	
	function spent(){

		return round($this->startTime - $this->startTime,4);
		}
	}
$timer = new Timer();
$timer->start();
usleep(1000);
$timer->stop();

echo "执行该脚本用时<b>".$timer->spent()."</b>秒";



