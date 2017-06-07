<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">

  	<title>
  		<?php echo get_bloginfo( 'name' ); ?>
  	</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon32.png">
    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/x-icon">

    <meta name="author" content="matt@mattmacneil.com">
    <meta name="description" content="  DESCRIPTION  ">
    <meta name="keywords" content="  KEYWORDS  ">
    <meta name="robots" content="index, follow">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100579821-1', 'auto');
  ga('send', 'pageview');

</script>

    <?php wp_head();?>
    
  </head>
  <body>

    <?php get_template_part( 'template-parts/nav'); ?>