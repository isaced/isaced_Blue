<?php 
/*
* 首页日志列表部分
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?> 

<!--文章显示-->
<div id="page">
	<div id="content">
    	<div id="yourpos">
			当前位置：<a href="<?php echo BLOG_URL; ?>" title="回到首页"> isaced</a> 
			<?php /* 控制当前位置的显示*/
				if ($params[1]=='sort'){ 
					if(isset($_GET['sort'])){
						//$sortname= $sort_cache[$_GET['sort']]['sortname'];
					}else{
						foreach($sort_cache as $val){
							if($val['alias']!='' && $params[2]==$val['alias']) $sortname= $val['sortname'];
						}
					}
			?> 
			<?php echo '&gt; 文章列表';?>
			<?php }elseif ($params[1]=='tag'){ ?>
						标签 &gt; <?php echo urldecode($params[2]);?>
			<?php }elseif($params[1]=='author'){ ?>
						作者 &gt; <?php echo blog_author($author);?>
			<?php }elseif($params[1]=='keyword'){ ?>
						搜索 &gt; <?php echo urldecode($params[2]);?>
			<?php }elseif($params[1]=='record'){ ?>
						日期 &gt; <?php echo substr($params[2],0,4).'年'.substr($params[2],4,2).'月';?>
			<?php }?>
		</div>
		<?php doAction('index_loglist_top'); ?>
		<?php foreach($logs as $value): ?>        	
			<div class="post">
				<h2 class="title">
					<a href="<?php  echo $value['log_url']; //文章地址?>" title="<?php echo $value['log_title']; ?>" >
						<?php echo $value['log_title']; //文章标题,自定义函数截取?>
					</a>
				</h2>
				
				<p class="meta">
					<?php echo gmdate('l Y-n-j G:i', $value['date']); //发布时间 ?>
                    分类:<?php blog_sort($value['logid']);  //分类 ?> 
                    热度:<?php echo $value['views']; //浏览量?>°
                    
				</p>
				
				<div class="entry">
					<?php echo $value['log_description'];  //文章内容?>
				</div>
                
		  </div> 
		<?php endforeach; ?>
		
		<div id="navigation">
        	<?php echo $page_url;?>
		</div>
	</div><!--end #content-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>