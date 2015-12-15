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
				echo '<link rel="stylesheet" type="text/css" href="plug/Assignment3.css" />';
				break;
			case 2:
				echo '<link rel="stylesheet" type="text/css" href="plug/index.css" />';
				echo '<link rel="stylesheet" type="text/css" href="plug/map.css" />';
		}
		?>
	</head>
	<div class="header ">
		<div class="container">
			<a href="index.php"><img class="logo" src="plug/logo.jpg" /></a>

			<ul class="<?php echo $SiteServer; ?>category">
				<li><a href="<?php echo $SiteServer; ?>Future.php">Future</a></li>
				<li><a href="<?php echo $SiteServer; ?>Japanese.php" >Japanese</a></li>
				<li><a href="<?php echo $SiteServer; ?>American.php" >American</a></li>
				<li><a href="<?php echo $SiteServer; ?>Chinese.php" >Chinese</a></li>
				<li><a href="<?php echo $SiteServer; ?>Rooms.php" class="right" style="">Rooms</a></li>
			</ul>

		</div>
		<div class="clear"></div>
	</div>
		<?php
		//控制导航栏的显示及其内容
		//第一格填该页的风格，第二格为网站后台的参数，用于支持外站的访问。
		Navigator($PageStyle,$SiteServer);
		?>
	</div>