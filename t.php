<?php 
/*
* 碎语部分
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<style>
/* t */
#tw { float: left; width: 685px; margin-bottom: 20px; background: #FFFFFF; }
#twitter li { border-bottom: dotted #CCCCCC 1px; list-style: none; }
#twitter li p { font-size: 10px; padding-left: 68px; text-align: right; padding: 5px 0px 2px; }
#twitter p { font-size: 12px; text-align: right; }
#twitter li small { font-size: 10px; padding: 0px 10px; }
#tw .main_img { border: 1px #2772ae solid; float: left; }
#tw .main_img img { border: 1px #fff solid }
#tw .op { float: left; height: 18px; margin: 6px 5px 3px; }
#tw .top { font-size: 12px; text-align: right; border-bottom: 1px #F7F7F7 solid; line-height: 2; width: 560px; margin-top: 5px; }
#tw .top a { padding: 0px 5px 0px 17px; background: url(images/t.gif) no-repeat }
#tw ul { margin: 5px 0px 3px 25px; width: 520px; line-height: 1.8; padding: 0px; }
#tw ul .li { margin: 10px 0px; padding: 5px 0px; border-bottom: #F7F7F7 1px solid; }
#tw ul li { margin: 0px 0px; padding: 0; }
#tw ul li .main_img { margin-top: 5px; }
#tw ul li .post1 { float: left; font-size: 13px; padding: 0px; margin: 0; width: 470px; padding: 0px 0px 0px 8px; }
#tw ul li .post1 span { color: #886353; font-weight: bold; }
#tw ul li { clear: both; padding: 0px; margin: 0px; }
#tw ul li .bttome { margin: 3px 0; vertical-align: middle }
#tw ul li .bttome .time { float: left; line-height: 14px; margin: 0; }
#tw ul li .bttome .post { float: right; font-size: 12px; line-height: 14px; margin: 0; }
#tw .time { font-size: 12px; color: #999999; padding-left: 43px }
#tw ul .r { margin: 5px 0px 0px 40px; color: #666666; border: 0; padding: 0px; }
#tw ul .r li { padding: 5px 3px 3px; border-bottom: #F7F7F7 1px solid; width: 475px }
#tw ul .r .num { font-size: 16px; font-weight: bold; color: #0079b7; padding: 0px 5px; float: left; width: 20px; }
#tw ul .r .time { padding: 0px 5px; }
#tw ul .r .name { padding: 0px 0px 0px 0px; font-size: 12px; color: #336699; }
#tw ul .r em a { font-style: normal; }
#tw ul .huifu { margin: 5px 0px 0px 43px; background: #F5F5F5; border: #CCCCCC solid 1px; text-align: center; display: none; }
#tw ul .huifu textarea { margin: 5px; width: 460px; border: #CCCCCC solid 1px; overflow: auto; }
#tw ul .huifu input { margin: 0px 5px; }
#tw ul .huifu div { text-align: left; padding: 0px 5px; text-align: center }
#tw ul .huifu .text { width: 60px; }
#tw ul .button_p { background: url(images/weibe_button.gif) no-repeat; border: 0; cursor: pointer; _cursor: hand; width: 63px; height: 25px; }
#tw .tbutton { font-size: 12px; float: none; margin-bottom: 3px; }
#tw .loading { background: url(images/loading.gif) no-repeat 200px 2px; height: 20px; }
#tw .tbutton input { width: 90px; border: #CCCCCC solid 1px; }
#tw .tbutton .button_p { background: url(images/weibe_button.gif) no-repeat; border: 0; cursor: pointer; _cursor: hand; width: 60px; height: 25px; }
#tw .tbutton .tinfo { float: left; }
#tw .msg { clear: both }
#tw li { list-style: none; }
#tw ul .huifu textarea { background-color: #FFFFFF; }
#tw ul .huifu input { background-color: #FFFFFF; }
#tw ul li ul { line-height: 0; font-size: 0; }
#tw ul li ul li { font-size: 12px; line-height: 22px; }
#tw .top { width: 650px; }
#tw ul li .post1 { width: 560px; }
#tw ul { width: 610px; }
#tw ul .r li { width: 565px }
#tw ul .huifu textarea { width: 550px; }
#tw ul li .bttome .post { font-size: 12px; line-height: 14px; text-align: right; float: none; clear: both; width: 610px; background: 0; border: 0; margin-bottom: 10px; }
#tw ul li .bttome .time { float: none; margin-top: -25px; }
</style>
<div id="page">
<div id="tw">
    <?php if(ROLE == 'admin' || ROLE == 'writer'): ?>
    <div class="top"><a href="<?php echo BLOG_URL . 'admin/twitter.php' ?>">发布碎语</a></div>
    <?php endif; ?>
    <ul>
    <?php 
    foreach($tws as $val):
    $author = $user_cache[$val['author']]['name'];
    $avatar = empty($user_cache[$val['author']]['avatar']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . $user_cache[$val['author']]['avatar'];
    $tid = (int)$val['id'];
    ?> 
    <li class="li">
    <div class="main_img"><img src="<?php echo $avatar; ?>" width="32px" height="32px" /></div>
    <p class="post1"><span><?php echo $author; ?></span><br /><?php echo $val['t'];?></p>
    <div class="clear"></div>
    <div class="bttome">
        <p class="post"><a href="javascript:loadr('<?php echo DYNAMIC_BLOGURL; ?>?action=getr&tid=<?php echo $tid;?>','<?php echo $tid;?>');">回复(<span id="rn_<?php echo $tid;?>"><?php echo $val['replynum'];?></span>)</a></p>
        <p class="time"><?php echo $val['date'];?> </p>
    </div>
	<div class="clear"></div>
   	<ul id="r_<?php echo $tid;?>" class="r"></ul>
    <div class="huifu" id="rp_<?php echo $tid;?>">   
	<textarea id="rtext_<?php echo $tid; ?>"></textarea>
    <div class="tbutton">
        <div class="tinfo" style="display:<?php if(ROLE == 'admin' || ROLE == 'writer'){echo 'none';}?>">
        昵称：<input type="text" id="rname_<?php echo $tid; ?>" value="" />
        <span style="display:<?php if($reply_code == 'n'){echo 'none';}?>">验证码：<input type="text" id="rcode_<?php echo $tid; ?>" value="" /><?php echo $rcode; ?></span>        
        </div>
        <input class="button_p" type="button" onclick="reply('<?php echo DYNAMIC_BLOGURL; ?>index.php?action=reply',<?php echo $tid;?>);" value="回复" /> 
        <div class="msg"><span id="rmsg_<?php echo $tid; ?>" style="color:#FF0000"></span></div>
    </div>
    </div>
    </li>
    <?php endforeach;?>
	<li id="pagenavi"><?php echo $pageurl;?></li>
    </ul>
</div><!--end #tw-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>