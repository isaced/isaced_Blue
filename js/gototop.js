$(document).ready(function(){
	//首先将#back-to-top隐藏
	 $("#gototop").hide();
	//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
	$(function () {
		$(window).scroll(function(){
		if ($(window).scrollTop()>100){
			$("#gototop").fadeIn(1500);
		}
		else
		{
			$("#gototop").fadeOut(1500);
		}
		});
		//当点击跳转链接后，回到页面顶部位置
		$("#gototop").click(function(){
			$('body,html').animate({scrollTop:0},800);
			return false;
		});
	});
});
