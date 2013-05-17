<?php 
/*
* 底部信息
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div style="clear: both;"></div>

<?php
if ($type == 'blog') { echo <<<LOADSCRIPT

<script type="text/javascript">
    var wumiiParams = "&num=6&mode=3&pf=emlog";
</script>
<script type="text/javascript" id="wumiiRelatedItems" src="http://widget.wumii.com/ext/relatedItemsWidget"></script>
<a href="http://www.wumii.com/widget/relatedItems" style="border:0;">
    <img src="http://static.wumii.cn/images/pixel.png" alt="无觅相关文章插件，快速提升流量" style="border:0;padding:0;margin:0;" />
</a>
LOADSCRIPT;
}
?>

<div id="footer">
		<p>
        Powered by <a href="http://www.emlog.net" title="emlog <?php echo Option::EMLOG_VERSION;?>">emlog</a> 
		Design by <a href="http://www.isaced.com/">isaced</a>.
		<a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a> 
		<?php echo $footer_info; ?>
       	
        <?php doAction('index_footer'); ?>
		</p>
</div>
</body>
</html>