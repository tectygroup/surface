<?php
	//引用配置文档
	include 'include/conf.php';
	//只有小分类的地方需要引用这样的类
	include 'include/Functions.php';
	//以下开始内容的显示
	//初始化页面
	
	
	//设置页面中显示的文档的风格的变量
	//0为主页，1为未来式，2为日式，3为美式，4为中式
	$PageStyle="3";
	
	
	//引用页眉的代码
	include 'include/header.php';
	//下面的部分可以填写核心内容
	//这里写的是用于调用pic函数的内容
	//下面应该写关于主题中初始化的名称内容。
	$Name="Living-Room";
	$Contents="<h2>American</h2><p>￥1,000,000</p>";//这里可以写HTML的格式的内容
	$TextColor="#000";//#3b362d";//这里是写文本的颜色（图片平均色暗100）
	$BackgroundColor="#a39991";//这里是写背景色（图片平均色亮50）
	//第一个空是写网站中的图片的路径，第二个空格是写由图片而要生成的背景颜色
	//第三个空是可能需要定义的自定义样式，第四个空是文本框显示的位置
	//（上T右R下B左L）
	pic("img/American 1.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");
	
	$Name="";
	$Contents="<p>50m²</p><p>Modern furniture</p><p>French window</p>";//这里可以写HTML的格式的内容
	$TextColor="#fff";//#3b362d";//这里是写文本的颜色（图片平均色暗100）
	$BackgroundColor="#a29c9b";//这里是写背景色（图片平均色亮50）
	//第一个空是写网站中的图片的路径，第二个空格是写由图片而要生成的背景颜色
	//第三个空是可能需要定义的自定义样式，第四个空是文本框显示的位置
	//（上T右R下B左L）
	pic("img/American 2.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");
	
	$Name="Dining-Room";
	$Contents="<p>30m²</p><p>Together kitchen and dining-room</p><p>Traditional American furniture</P>";//这里可以写HTML的格式的内容
	$TextColor="#FFF";//#3b362d";//这里是写文本的颜色（图片平均色暗100）
	$BackgroundColor="#c4b9ab";//这里是写背景色（图片平均色亮50）
	//第一个空是写网站中的图片的路径，第二个空格是写由图片而要生成的背景颜色
	//第三个空是可能需要定义的自定义样式，第四个空是文本框显示的位置
	//（上T右R下B左L）
	pic("img/American 3.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");
	
	$Name="Toilet";
	$Contents="<p>20m²Luxury decoration and furniture</p>";//这里可以写HTML的格式的内容
	$TextColor="#FFF";//#3b362d";//这里是写文本的颜色（图片平均色暗100）
	$BackgroundColor="#635d51";//这里是写背景色（图片平均色亮50）
	//第一个空是写网站中的图片的路径，第二个空格是写由图片而要生成的背景颜色
	//第三个空是可能需要定义的自定义样式，第四个空是文本框显示的位置
	//（上T右R下B左L）
	pic("img/American 4.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");
	
	$Name="Host-Room";
	$Contents="<p>30m²</p><p>Simple decoration</p><p>Nice view</P>";//这里可以写HTML的格式的内容
	$TextColor="#FFF";//#3b362d";//这里是写文本的颜色（图片平均色暗100）
	$BackgroundColor="#a19494";//这里是写背景色（图片平均色亮50）
	//第一个空是写网站中的图片的路径，第二个空格是写由图片而要生成的背景颜色
	//第三个空是可能需要定义的自定义样式，第四个空是文本框显示的位置
	//（上T右R下B左L）
	pic("img/American 5.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");
	
	$Name="Guest-Room";
	$Contents="<p>20m²</p><p>Simple decoration</p><p>Air conditioner</p>";//这里可以写HTML的格式的内容
	$TextColor="#FFF";//#3b362d";//这里是写文本的颜色（图片平均色暗100）
	$BackgroundColor="#a7a7a0";//这里是写背景色（图片平均色亮50）
	//第一个空是写网站中的图片的路径，第二个空格是写由图片而要生成的背景颜色
	//第三个空是可能需要定义的自定义样式，第四个空是文本框显示的位置
	//（上T右R下B左L）
	pic("img/American 6.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");
	
?>






<?php
	//引用页脚的代码
	include 'include/footer.php';
?>