﻿<!DOCTYPE html><html dir="ltr" lang="vi-vn"><head><title><?php global $page, $paged;wp_title( '|', true, 'right' );bloginfo( 'name' );$site_description = get_bloginfo( 'description', 'display' );if ( $site_description && ( is_home() || is_front_page() ) )echo " | $site_description";if ( $paged >= 2 || $page >= 2 )echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );?></title><?php wp_head();?><?php if(is_category()) { ?><meta name="keywords" content="Xem phim <?php echo get_cat_name($cat);?>" /><?php } ?><?php if(is_tag() ) { ?><meta name="description" content="Xem phim <?php single_tag_title(); ?> ,Phim <?php single_tag_title(); ?> HD,tuyen tap phim <?php single_tag_title(); ?>" /><meta name="keywords" content="Xem phim <?php single_tag_title(); ?>, phim <?php single_tag_title(); ?> HD,phim <?php single_tag_title(); ?> chat luong cao " /><?php } ?><link rel="alternate" type="application/rss+xml" title="<?php echo SITE_NAME; ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" /><link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><meta name="robots" content="index, follow" /><meta name='revisit-after' content='1 days' /><meta property="fb:app_id" content="490871234321238"/><meta property="fb:admins" content="100003461838669"/> 
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/print.css" media="print">
<link rel="profile" href="http://gmpg.org/xfn/11" /><link href="<?php bloginfo('template_directory');?>/css/style.css?v=13012013013637" type="text/css" rel="stylesheet"><div id="wrapper"><div id="header"><div class="container"><h1 id="logo"><a href="<?php bloginfo('siteurl');?>" title="Xem phim online, xem phim hd,xem phim chiếu rạp miễn phí">Xem Phim Online, Xem Phim HD,Xem Phim Chiếu Rạp</a></h1><div id="search"><form method="get" id="cse-search-box" name="search" action="<?php bloginfo('siteurl');?>/tim-kiem-phim"><input type="hidden" name="cx" value="017120531741807955792:WMX-1055315542"/><input type="hidden" value="FORID:9" name="cof"/><input type="hidden" value="UTF-8" name="ie"/><input type="hidden" name="search_type" id="search_type" value="all" /><input type="text" name="q" placeholder="Từ khóa cần tìm..." class="keyword"><button type="submit" class="submit"></button></form></div><div id="sign"><?php if (is_user_logged_in()) { ?><?php $userid=get_current_user_id();$user_info = get_userdata($userid);$q = $wpdb->get_results("SELECT box_id,box_phim FROM wp_boxfilm WHERE box_user = $userid ");?><div class="logged"><div class="info">Xin chào, <a data-user-id="<?php echo $user_info->ID;?>" class="username"><?php echo $user_info->user_login;?></a></div><div class="bookmark"><span>Hộp phim</span><ul class="bookmarklist"></ul></div><div class="logout"><a rel="nofollow" href="<?php bloginfo('siteurl');?>/wp-login.php?action=logout" title="logout">Thoát</a></div></div><?php } else { ?> <div class="links">  <a rel="nofollow" href="<?php bloginfo('siteurl');?>/wp-login.php" class="simplemodal-login" title="Đăng nhập">Đăng nhập</a></div><div class="links"><a rel="nofollow" href="<?php bloginfo('siteurl');?>/wp-login.php?action=register" class="simplemodal-register" title="Đăng ký">Đăng ký thành viên</a></div><?php } ?></div></div></div><div id="nav"><?php $defaults = array('theme_location'  => 'top','menu'            => '', 'container'       => '', 'container_class' => '', 'container_id'    => '','menu_class'      => '', 'menu_id'         => '','echo'            => true,'fallback_cb'     => 'wp_page_menu','items_wrap'      => '<ul id="%1$s" class="container menu">%3$s</ul>','depth'           => 0,'walker'          => ''); ?><?php wp_nav_menu( $defaults ); ?></div><?php include('bbit-compress.php'); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43433550-1', 'phim6789.com');
  ga('send', 'pageview');

</script>