<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>折叠菜单显示</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Iconos 图标显示引用css,css 不单单只包含字体还有图标等等所以必须引用，而且是cdn的所以很快-->
	<!-- 网站：http://www.bootcss.com/p/font-awesome/  可以通过F12 看class并引入-->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- 		<link href="css/font-awesome.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>
<div style="text-align:center;clear:both">
<script  type="text/javascript"></script>
<script type="text/javascript"></script>
</div>
	<!-- Contenedor -->
	<ul id="accordion" class="accordion">
		<li>
			<div class="link"><i class="fa fa-paint-brush"></i>web运维技术<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">pthon</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">php</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-code"></i>城市列表<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">深圳</a></li>
				<li><a href="#">长沙</a></li>
				<li><a href="#">武汉</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-plane"></i>动物列表<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">猫</li>
				<li><a href="#">狗</a></li>
				<li><a href="#">猪</a></li>
				<li><a href="#">羊</a></li>
			</ul>
		</li>
		<li><div class="link"><i class="fa fa-globe"></i>公司列表<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">搜房网</a></li>
				<li><a href="#">Q房网</a></li>
				<li><a href="#">链家</a></li>
				<li><a href="#">58同城</a></li>
			</ul>
		</li>
	</ul>

  <script src='js/jquery.js'></script>

  <script src="js/index.js"></script>

</body>

</html>