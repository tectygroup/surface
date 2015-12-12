<?php
	//引用配置文档
	include 'include/conf.php';
	//只有小分类的地方需要引用这样的类
	include 'include/Functions.php';
	//以下开始内容的显示
	//初始化页面
	
	
	//设置页面中显示的文档的风格的变量
	//0为主页，1为未来式，2为日式，3为美式，4为中式
	$PageStyle="1";
	
	
	//引用页眉的代码
	include 'include/header.php';
	//下面的部分可以填写核心内容
	//这里写的是用于调用pic函数的内容
	//下面应该写关于主题中初始化的名称内容。
	$Name="";
	$Contents="<p>这里HHHddddddddHH内容内容</p>";//这里可以写HTML的格式的内容
	$TextColor="#FFF";//#3b362d";//这里是写文本的颜色（图片平均色暗100）
	$BackgroundColor="#978a74";//这里是写背景色（图片平均色亮50）
	//第一个空是写网站中的图片的路径，第二个空格是写由图片而要生成的背景颜色
	//第三个空是可能需要定义的自定义样式，第四个空是文本框显示的位置
	//（上T右R下B左L）
	pic("img/example.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");
	$Name="hhhhhhh";
	$Contents="<p>这里HHHddddddddHH内容内容</p>";//这里可以写HTML的格式的内容
	$TextColor="#FFF";//#3b362d";//这里是写文本的颜色（图片平均色暗100）
	$BackgroundColor="#978a74";//这里是写背景色（图片平均色亮50）
	//第一个空是写网站中的图片的路径，第二个空格是写由图片而要生成的背景颜色
	//第三个空是可能需要定义的自定义样式，第四个空是文本框显示的位置
	//（上T右R下B左L）
	pic("img/example.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","T");
?>






<?php
	//引用页脚的代码
	include 'include/footer.php';
?>