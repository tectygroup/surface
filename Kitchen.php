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
	$PageStyle="24";
	
	
	//引用页眉的代码
	include 'include/header.php';
	//下面的部分可以填写核心内容
	//这里写的是用于调用pic函数的内容
	//下面应该写关于主题中初始化的名称内容。
        
	$Name="Amercian";
	$Contents="<ul><li><h3>20m²<h3></li>
                      <li>generous decoration and fit for children</li>
                      <li>many drawer,easy to assortment</li>
                      <li>Dining table,Cupboard,Sink</li>
                      <li>light brown wood floor &#38; white walls</li></ul>";
	$TextColor="#FFF";//#3b362d";
	$BackgroundColor="#c4b9ab";
	
	pic ("img/kitchen1.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","R");
	
        

	$Name="Chinese";
	$Contents="<ul><li><h3>15m²<h3></li>
                      <li>Elegance and peaceful decoration</li>
                      <li>The furture full of various arabesquitic</li>
                      <li>Dining table,Cupboard,Sink</li>
                      <li>Brown vitrolite floor and whrite wall</li></ul>";
                    
	$TextColor="#FFF";//#3b362d";
	$BackgroundColor="#b0aba5";
	
	pic("img/kitchen2.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");


    
	$Name="Japanese";
	$Contents="<ul><li><h3>25m²<h3></li>
                      <li>exquisite and neat</li>
                      <li>every furture uses space as much as they can.</li>
                      <li>earth color vitrolite floor  &#38; dark wall</li>
			</ul> ";
	$TextColor="#FFF";//#3b362d";
	$BackgroundColor="#92866f";
	
	pic("img/kitchen3.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","T");



    
	$Name="Future";
	$Contents="<ul><li><h3>25m²<h3></li>
                      <li>clear and full of fantasy</li>
                      <li>these futures have metal colours and smooth tactility</li>
                      <li>light grey vitrolite  floor  &#38;  white wall </li></ul> ";
	$TextColor="#000";//#3b362d";
	$BackgroundColor="#eaedf1";
	
	pic("img/kitchen4.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","R");



        





	
?>






<?php
	//引用页脚的代码
	include 'include/footer.php';
?>