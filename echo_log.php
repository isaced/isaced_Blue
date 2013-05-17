<?php 
/*
* 阅读日志页面
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="page">
<div id="content">
    <div id="yourpos">你的位置：<a href="<?php echo BLOG_URL; ?>"> isaced</a> > <?php blog_sort($logid); ?> > 阅读文章  </div>
    <div class="post">
        <h2 class="title"><?php topflg($top); //显示置顶标记?><?php echo $log_title; //日志标题 ?></h2>
        <p class="meta">
            <?php echo gmdate('l Y-n-j G:i ', $date); //发布时间 ?>
            分类:<?php echo blog_sort($logid); //日志分类?> 
            <?php echo blog_tag($logid);  //标签?>
            热度:<?php echo $views; //浏览量?>°
        </p>
        <div class="entry">
            <?php echo $log_content;  //文章内容?>
        </div>
        
        <div class="wumii-hook">
            <input type="hidden" name="wurl" value="<?php echo Url::log($logid); ?>" />
            <input type="hidden" name="wtitle" value="<?php echo $log_title; ?>" />
        </div>
        <script>
            var wumiiSitePrefix = "<?php echo BLOG_URL; ?>";
        </script>
        
        <div id="postbottom">
            <div id="nextlog"><?php neighbor_log($neighborLog); ?></div>
        </div>
        <?php doAction('log_related', $logData); ?>
        <?php  blog_comments($comments); ?>
        <?php  blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
    
        </div><!--end #post-->
</div><!--end #content-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>