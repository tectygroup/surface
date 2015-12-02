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
		    <div class="category">
				<div>分类1</div>
				<div>分类2</div>
				<div>分类3</div>
				<div>分类4</div>
			</div>
		</div>
	
	</div>
	<div class="navigator ">
		<div class="container">
		
		
		</div>
	</div>