<?php 

function Product($Name){
	//将变量ProductCategory返回规定的格式的内容
	//其中包括左边的分类名称及右边的条形栏


	echo '
	<div class="left">
		<h2>'.$Name.'</h2>
	</div>
	<div class="right">
		<ul class="details">
			<li class="text"><a href="####">详情1</a><span class="sepasrator">|</span></li>
			<li><a href="####">详情1</a><span class="sepasrator">|</span></li>
			<li><a href="####">详情1</a><span class="sepasrator">|</span></li>
			<li><a href="####">详情1</a></li>
		</ul>
		</div>
	<div class="clear"></div>
	';
	//按照规定格式输出抬头上面的变量
}
function MailAddress($MailAddress,$Content){
	echo '<a href="mailto:'.$MailAddress.'">'.$Content.'</a>';	
}
	
function pic($PictureLink,$BackgroundColor,$Content,$ContentX,$ContentY,$Style){
	//这个将图片排版好
	echo '
		<div style="background-color:'.$BackgroundColor.';'.$Style.'" class="img"><div class="container">
			<div class="background"><img src="'.$PictureLink.'" />
			<div class="content" style="left:'.$ContentX.';top:'.$ContentY.';">
				'.$Content.'
			</div>
			
			</div>
			<div class="clear"></div>
		</div></div>';
}
?>
