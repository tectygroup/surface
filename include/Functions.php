<?php 

function Navigator($PageStyle,$SiteServer){
	//定义每种类型所要链接显示名称的数组
	//后面需要定义的显示出来的名称
	//0为主页，1为Rooms，2为Room，3为Contacts
	//21,22,23,24分别为Living-Room,Bedroom,Bathroom,Kitchen
	$Rooms=array("Living-Room","Bedroom","Bathroom","Kitchen");$RoomsName="Room Overview";//Rooms的总页面
	$Room=array("American","Chinese","Japanese","Modern");//Room页面,每个房间的名字在后面定义
	$Contacts=array("Designer","Supplier");$ContactsName="Contacts";
	$Cn=array("Living-Room","Bedroom","Toilet","Dining-Room");$CnName="Chinese Style";
	
	//定义一个之后会用到的空数组,空变量Detail
	//用于储存样导航栏的信息与样式信息，及样式的全称。
	$array=array();$Details="";$StyleName="";$NavigatorShow="";
	switch ($PageStyle){
		case 0:
			//判断为主页就隐藏导航栏,插入一个空的div占位。
			
			$NavigatorShow="0";
			break;
		//每一种风格的样式配置赋值为后面循环语句用到的数组
		case 1:
			$array=$Rooms;
			$StyleName=$RoomsName;
			break;		
		case 21:
			$array=$Room;
			$StyleName="Living-Room";
			break;			
		case 22:
			$array=$Room;
			$StyleName="Bedroom";
			break;				
		case 23:
			$array=$Room;
			$StyleName="Bathroom";
			break;				
		case 24:
			$array=$Room;
			$StyleName="Kitchen";
			break;		
		case 3:
			$array=$Contacts;
			$StyleName=$ContactsName;
			break;
		case 4:
			$array=$Cn;
			$StyleName=$CnName;
			break;
	}
	//通过循环语句来将值html化后写入Detail的变量中去
	$x="";
	$arrlength=count($array);
	for($x=0;$x<$arrlength;$x++) {
		if($x<$arrlength-1){
			$Details=$Details.'<a href="#'.$array[$x].'"><li class="border">'.$array[$x].'</li></a>';
		}
		else {
			$Details=$Details.'<a href="#'.$array[$x].'"><li>'.$array[$x].'</li></a>';
		}
	}
	foreach ($array as $array) {

	}
	//通过判断NavigatorShow来控制是否显示Navigator的内容。
	if($NavigatorShow=="0"){
		echo'<div class="navigator"></div>';
	}
	else{
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
							echo $Details.'
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>';
		//按照规定格式输出抬头上面的变量
	}
	
	//这里是如果是主页，隐藏导航栏的地方
	end:
}
function MailAddress($MailAddress){
	echo '<a href="mailto:'.$MailAddress.'">'.$MailAddress.'</a>';	
} 


//PictureLink是指向于网站内图片的链接，BackgroundColor是输入#的十六进制颜色
//Content是插入的文字内容的代码，Style是需要额外自定义的样式，Name是用于添加锚点参数的
//Align是表示这个文本框相对于图片的位置是上下左右，然后调用CSS中相应的代码
function pic($PictureLink,$TextColor,$BackgroundColor,$Content,$Name,$Style,$Align){
	//这个将图片排版好

	echo '
		<div style="background-color:'.$BackgroundColor.';'.$Style.'" class="img">
			<div class="AnchorLink" id="'.$Name.'" ></div>
			<div class="container">
				<div class="background"><img src="'.$PictureLink.'" />
				<div class="content '.$Align.' opacity" style="background-color:'.$BackgroundColor.'">
				</div>
				<div class="content '.$Align.'"><div class="words" style="color:'.$TextColor.'">'.$Content.'</div></div>
				</div>
				<div class="clear">
			</div>
		</div></div>';
}
//这个函数是用于插入一个全屏的div，带有指定的链接
function DivLink($link,$content,$TextColor){
	
	return '<a href="'.$link.'"><div style="color:'.$TextColor.'" class="DivLink">'.$content.'</div></a>';
}

?>

