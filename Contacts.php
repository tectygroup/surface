<?php
	//引用配置文档
	include 'include/conf.php';
	//只有小分类的地方需要引用这样的类
	include 'include/Functions.php';
	//以下开始内容的显示
	//初始化页面
	
	
	//设置页面中显示的文档的风格的变量
	//0为主页，1为Rooms，2为Room，3为Connect
	$PageStyle="1";
	//引用页眉的代码
	include 'include/header.php';
?>
<div class="container">
	<table class="table-2">
	<tr>
		<td>Toby Huang</td>
		<td>Skyler Liu</td>
	</tr>
	<tr>
		<td>+86-150-0000-0000</td>
		<td>+86-150-0000-0000</td>
	</tr>
	<tr>
		<td><?php MailAddress("66@qq.com");?></td>
		<td><?php MailAddress("66@qq.com");?></td>
	</tr>
	<tr>
		<td><img src="img/Toby.jpg" /></td>
		<td><img src="img/Skyler.jpg" /></td>
	</tr>
	<tr>
		<td><img src="img/Emma.jpg" /></td>
		<td><img src="img/Bill.jpg" /></td>
	</tr>
	<tr>
		<td><?php MailAddress("66@qq.com");?></td>
		<td><?php MailAddress("66@qq.com");?></td>
	</tr>
	<tr>
		<td>+86-150-0000-0000</td>
		<td>+86-150-0000-0000</td>
	</tr>
	<tr>
		<td>Emma Yuan</td>
		<td>Bill Jiang	</td>
	</tr>
	</table>


</div>





<?php
	//引用页脚的代码
	include 'include/footer.php';
?>