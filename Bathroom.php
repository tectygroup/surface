<?php
	//引用配置文档
	include 'include/conf.php';
	//只有小分类的地方需要引用这样的类
	include 'include/Functions.php';
	//以下开始内容的显示
	//初始化页面
	
	
	//设置页面中显示的文档的风格的变量
	//0为主页，1为Rooms，2为Room，3为Contacts
	//21,22,23,24分别为Living-Room,Bedroom,Bathroom,Kitchen
	$PageStyle="23";
	
	
	//引用页眉的代码
	include 'include/header.php';
	//下面的部分可以填写核心内容
	//这里写的是用于调用pic函数的内容
	//下面应该写关于主题中初始化的名称内容。
	//这里写的是用于调用pic函数的内容
	//下面应该写关于主题中初始化的名称内容。
	$Name="American style";
	$Contents="<ul><li><h2>20m²<h2></li>
                      <li>Luxury decoration and furniture</li>
                      <li>Black marble floor & white walls</li>
                      <li>Toilet,Sink,Carpet,Showers</li></ul>";//这里可以写HTML的格式的内容
	$TextColor="#FFF";//#3b362d";//这里是写文本的颜色（图片平均色暗100）
	$BackgroundColor="#bdb8b2";//这里是写背景色（图片平均色亮50）
	//第一个空是写网站中的图片的路径，第二个空格是写由图片而要生成的背景颜色
	//第三个空是可能需要定义的自定义样式，第四个空是文本框显示的位置
	//（上T右R下B左L）
	pic("img/bathroom1.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");

        

        $Name="Chinese style";
	$Contents="<ul><li><h2>15m²<h2></li>
                      <li>Wooden decoration&Modern washing system</li>
                      <li>Toilet,Sink,Carpet,Showers</li>
                      <li>The ground is gray and wooden decoration wall </li></ul>";
	$TextColor="#FFF";//#3b362d";
	$BackgroundColor="#9b7a61";
        pic("img/bathroom2.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","T");



        $Name="Japan style";
	$Contents="<ul><li><h2>25m²<h2></li>
                      <li>Simple and spacious</li>
                      <li>Toilet,Sink,Carpet,Showers</li>
                      <li>The wall is white</li>
                      <li>The ground is gray</li></ul>";
	$TextColor="#FFF";//#3b362d";
	$BackgroundColor="#918b7f";
        pic("img/bathroom3.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","L");

        
        $Name="Future style";
	$Contents="<ul><li><h2>25m²<h2></li>
                      <li>Modern equipment</li>
                      <li>Perfect hot water system & white marble walls</li>
                      <li>Toilet,Sink,Carpet,Showers</li></ul>";
	$TextColor="#FFF";//#3b362d";
	$BackgroundColor="#dadcdc";
        pic("img/bathroom4.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","R");
?>
	






<?php
	//引用页脚的代码
	include 'include/footer.php';
?>