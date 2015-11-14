<html>
	<head>
		<title><?php echo $SiteName; ?></title>
		<?php 
		//样式的引用输出
		switch ($SiteStyle){
			case 1:
				echo '<link rel="stylesheet" type="text/css" href="plug/index.css>';
				break;
			case 2:
				echo '<link rel="stylesheet" type="text/css" href="plug/index.css>';
				echo '<link rel="stylesheet" type="text/css" href="plug/map.css>';
		}
		
		
		
		?>
	</head>
	<div class="hreader">
	
		<p class=""><?php echo $SiteName ;?></p>
		<a href="<?php $ConfLink.$UserName; ?>" >
		<p class=""><?php echo $UserName;?></p>
		</a>
		
	</div>