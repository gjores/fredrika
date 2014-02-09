<html  xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
 
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

</head>
<body id="main">
<!-- TOP-NAV -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
        <?php wp_nav_menu( array( 'theme_location' => 'top-nav','menu_class' => 'nav navbar-nav pull-right top-nav' ) ); ?>
 	</div>
</nav>
<!-- TOP-NAV END -->




<!-- HEADER START -->
    
<div class="container">
    <div class="col-md-12">
    <div class="row">

        <h1>fredrika bremer</h1>
    </div>
    <!-- MAIN NAV START -->
    <div class="row">
        <nav class="navbar navbar-default main-nav" role="navigation">
            <div class="container">
                 <?php wp_nav_menu( array( 'theme_location' => 'top-nav','menu_class' => 'nav navbar-nav top-nav' ) ); ?>
            </div>
        </nav>
    </div>
    <!-- MAIN NAV END -->