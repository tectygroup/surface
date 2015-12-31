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
    <?php 
    $HeaderItemLeft=array(
        array ("Timetable","Timetable"),
        array ("Instruments","Instruments")
        );
    $HeaderItemRight=array(
        array ("Sign In","Sign")
        );
    //这两个数组创建的数据是用于Header函数引用，这两个数组是镜像的二维数组，第一个是显示在页面上的文字
    //第二个是该文字指向的地址，该值自带“.php”的后缀
    EchoHeader($HeaderItemLeft,$HeaderItemRight);
    ?>
	<?php
	//控制导航栏的显示及其内容
	//第一格填该页的风格，第二格为网站后台的参数，用于支持外站的访问。
	Navigator($PageStyle,$SiteServer);
	?>
