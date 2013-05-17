<?php
/*
Template Name:简约蓝
Description:这是一款以蓝色调调为主的主题，以清新简约风格为主，慢慢欣赏它吧。
Version:1.3
Author:isaced
Author Url:http://www.isaced.com
Sidebar Amount:1
ForEmlog:5.0
*/

if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
//调用Jquery
if (function_exists('emLoadJQuery')) {emLoadJQuery();}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link href="<?php echo TEMPLATE_URL; ?>main.css" rel="stylesheet" type="text/css" />
<?php doAction('index_head'); ?>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_URL; ?>js/gototop.js" type="text/javascript"></script>

</head>
<body id="top">
<p id="gototop"><a href="#top">回到顶部</a></p>


	<div id="header">
        <!-- LOGO-->
        <div id="logo">
            <h1><a href="<?php echo BLOG_URL; //链接 ?>"><?php echo $blogname; //博客标题 ?></a></h1>
            <p><em><?php  echo $bloginfo; //博客介绍 ?></em></p>        
            <a id="rss" href="<?php echo BLOG_URL; ?>rss.php"></a><!--RSS-->
   	 	</div>    
    	<!-- LOGO-->

		<!-- 菜单-->
        <div id="menu"><?php blog_navi();?></div>
		<!-- 菜单-->
        
        <!-- 搜索-->
        <div id="search">
            <form  name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
                <input type="text" name="keyword" id="search-text" speech=”speech” x-webkit-speech=”x-webkit-speech” x-webkit-grammar=”builtin:translate” />
                <input type="submit"  id="search-submit" value="GO" />
            </form>
        </div>
		<!--搜索 -->
	</div>