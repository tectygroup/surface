<?php
//一下两个变量会合成一个变量用于显示Navigator的内容
$ProductName="物品名称";
//物品的分类是个数字用于判断分类然后自动输出
$ProductCategory="";
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title><?php echo $SiteName; ?></title>
		<?php 
		//样式的引用输出
		switch ($SiteStyle){
			case 1:
				echo '<link rel="stylesheet" type="text/css" href="plug/index.css" />';
				break;
			case 2:
				echo '<link rel="stylesheet" type="text/css" href="plug/index.css" />';
				echo '<link rel="stylesheet" type="text/css" href="plug/map.css" />';
		}
		?>
	</head>
	<div class="header ">
		<div class="container">
			<img class="logo" src="plug/logo.jpg" />
		    <ul class="category">
				<a href="####"><li class="text">分类1</li></a>
				<a href="####"><li class="text">分类2</li></a>
				<a href="####"><li class="text">分类3</li></a>
				<a href="####"><li class="text">分类4</li></a>
			</li>
		</div>
		<div class="clear"></div>
	</div>
	<div class="navigator">
		<div class="container">
			<?php
			Product("产品名称");
			?>
		</div>
	
	</div>