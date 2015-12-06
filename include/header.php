<html>
	<head>
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
	<div class="hreader ">
		<div class="container">
			<img class="logo" src="plug/logo.jpg" />
		    <ul class="category">
				<a href="####"><li>分类1</li></a>
				<a href="####"><li>分类2</li></a>
				<a href="####"><li>分类3</li></a>
				<a href="####"><li>分类4</li></a>
			</li>
		</div>
	</div>
	<div class="navigator ">
		<div class="container">
		
		
		</div>
	</div>