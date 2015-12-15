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
	$PageStyle="21";
	
	
	//引用页眉的代码
	include 'include/header.php';
	//下面的部分可以填写核心内容
	//这里写的是用于调用pic函数的内容
	//下面应该写关于主题中初始化的名称内容。
	$Name="American";
	$Contents="<ul><li><h3>50m²<h3></li>
	               <li>Tile ceramic white floor</li>
				   <li>Modern furniture</li>
				   <li>French window</li></ul>";
	$TextColor="#fff";
	$BackgroundColor="#a39991";
	pic("img/Living-Room1.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");
	
	$Name="Chinese";
	$Contents="<ul><li>40m²</li>
	               <li>Wooden floor</li>
				   <li>Traditional Chinese furniture</li>
				   <li>White</li>
				   <li>Chinese painting wallpaper</li>";
	$TextColor="#FFF";
	$BackgroundColor="#b5aa99";
	pic("img/Living-Room2.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");
	
	
	
	$Name="Japanese";
	$Contents="<ul><li>60m²</li>
	               <li>Wooden floor</li>
				   <li>White and brown</li>
				   <li>Luxury Japanese decoration</li>
				   <li>Simple modern furniture</li></ul>";
	$TextColor="#FFF";
	$BackgroundColor="#9d9481";
	pic("img/Living-Room3.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");
	
	$Name="Modern";
	$Contents="<ul><li>40m²</li>
	           <li>Black Wooden floor</li>
			   <li>LCD TV</li>
			   <li>Perfect surround sound system</li>
			   <li>Luxury furniture</li></ul>";
	$TextColor="#FFF";
	$BackgroundColor="#dadde4";
	pic("img/Living-Room4.jpg",$TextColor, $BackgroundColor, $Contents,$Name,"","B");
?>






<?php
	//引用页脚的代码
	include 'include/footer.php';
?>