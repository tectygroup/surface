<html>
	<head>
		<title><?php echo $SiteName; ?></title>
		<?php 
		//��ʽ���������
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
		<?php echo $UserName;?>
		</a>
		
	</div>