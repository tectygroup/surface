<?php 

function Navigator($PageStyle,$SiteServer){
	//定义每种类型所要链接显示名称的数组
	$Fu=array("样式一","样式二","样式三");
	$Jan="";
	$US="";
	$Cn="";
	
	//定义一个之后会用到的空数组
	$array=array();
	switch ($PageStyle){
		case 0:
			//判断为主页就隐藏导航栏
			goto end;
			break;
		//每一种风格的样式配置赋值为后面循环语句用到的数组
		case 1:
			$array=$Fu;
			break;		
		case 2:
			$array=$Jan;
			break;		
		case 3:
			$array=$US;
			break;
		case 4:
			$array=$Cn;
			break;
	}
	//通过循环语句来将值html化后写入Detail的变量中去
	foreach ($array as $value) {
		
	}
	
	//将变量ProductCategory返回规定的格式的内容
	//其中包括左边的分类名称及右边的条形栏
	echo '
		<div class="navigator">
			<div class="container">
				<div class="left">
					<h2>'.$StyleName.'</h2>
				</div>
				<div class="right">
					<ul class="details" >';
						//这里显示上面用循环语句输出的内容。
						echo $Details;
						echo '<li><a href="'.$SiteServer.'####">详情1</a><span class="sepasrator">|</span></li>
						<li><a href="'.$SiteServer.'####">详情1</a><span class="sepasrator">|</span></li>
						<li><a href="'.$SiteServer.'####">详情1</a><span class="sepasrator">|</span></li>
						<li><a href="'.$SiteServer.'####">详情1</a>	
					</ul>
				</div>
			<div class="clear"></div>
		</div>';
	//按照规定格式输出抬头上面的变量
	
	
	//这里是如果是主页，隐藏导航栏的地方
	end:
}
function MailAddress($MailAddress,$Content){
	echo '<a href="mailto:'.$MailAddress.'">'.$Content.'</a>';	
}


//PictureLink是指向于网站内图片的链接，BackgroundColor是输入#的十六进制颜色
//Content是插入的文字内容的代码，Style是需要额外自定义的样式，Name是用于添加锚点参数的
//Align是表示这个文本框相对于图片的位置是上下左右，然后调用CSS中相应的代码
function pic($PictureLink,$BackgroundColor,$Content,$Style,$Name,$Align){
	//这个将图片排版好
	echo '
		<div name="'.$Name.'"style="background-color:'.$BackgroundColor.';'.$Style.'" class="img"><div class="container">
			<div class="background"><img src="'.$PictureLink.'" />
			<div class="content '.$Align.'" ;">
				'.$Content.'
			</div>
			
			</div>
			<div class="clear"></div>
		</div></div>';
}
?>
