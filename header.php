<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><? bloginfo('name'); ?><? if ( is_single() ) { ?> » <? } ?><? wp_title(); ?></title>
<meta name="generator" content="WordPress <? bloginfo('version'); ?>" />
<meta http-equiv="content-type" content="<? bloginfo('html_type'); ?>; charset=<? bloginfo('charset'); ?>" />
<meta name="author" content="<? bloginfo('admin_email'); ?>" />
<meta name="description" content="<? bloginfo('description'); ?>" />
<meta name="robots" content="follow" />
<link rel="stylesheet" href="<? bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<? bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<? bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<? bloginfo('pingback_url'); ?>" />
<? wp_head(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/jQuery.Color.js"></script>
</head>
<script>
jQuery(document).ready(function(e) {
   
   
   jQuery(".wholePagePanel").each(function(index, element) {
		jQuery(this).hover(function(e) {
			jQuery(this).children('.title').animate(
			{
				height: '0px',
				top: '240px'
			},
			500);
    	},
		function(e) {
			jQuery(this).children('.title').animate(
			{
				height: '90px',
				top: '150px'
			},
			500);
    	}
		);
		
	});
   
    
});

</script>
<body>

<div id="wrapper">

	<!-- Rightcorner Menu -->
    <div id="headerMenu">
        <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'depth' => 2, ) ); ?>
    </div>
    <!-- End Rightcorner Menu -->
    <!-- Box with Blog Title -->
    	<? if("" == locate_template( 'logo.png' )){ ?>
        <div id="logoBox">
            <div id="main"><? bloginfo("name") ?></div>
            <div id="sub"><? bloginfo("description") ?></div>
        </div>
        <? } else { ?>
       	<div id="logoBox" style="height:150px">
        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<? bloginfo('template_directory') ?>/logo.png" />
           	</a>
       	</div>
        <? } ?>
    <!-- End of Box -->
    <!-- Main Navigationbar -->
    <div id="navBar">
      <div id="mainMenu">
      	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>	              
      </div> 
    </div>
    <!-- End of Main Navigation -->