<?php 
/*
* 自建页面模板
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="page">
<div id="content">
<div class="post">
	
	<h2 class="title"><?php echo $log_title; ?></h2>
	<div class="entry">
		<?php echo $log_content;  //文章内容?>
	</div>
	</div><!--end #post-->
</div><!--end #content-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>