<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Set the viewport width to device width for mobile -->
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width" />

      <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

  ?></title>

  

 


 <link href="<?php bloginfo('template_directory');?>/stylesheets/normalize.css" rel="stylesheet" type="text/css">
 
 <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/stylesheets/foundation.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/stylesheets/app.css">

  <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet" type="text/css">
      <link href="<?php bloginfo('template_directory');?>/fonts/fonts.css" rel="stylesheet" type="text/css">
  <script src="<?php bloginfo('template_directory');?>/javascripts/modernizr.foundation.js"></script>
    <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<!--[if lte IE 7]><script src="<?php bloginfo('template_directory');?>javascripts/lte-ie7.js"></script><![endif]-->
 <?php wp_head(); ?> 
</head>
<body>
  <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<div class="page_wrapper"> 

<!-- main wrapper begins-->

<header class="row"> 


<hgroup class="four columns">
<h1 class"site_logo"> <a href="<?php bloginfo('url');?>"> <img src="<?php bloginfo('template_directory');?>/images/logo.png"></a></h1>
</hgroup>


<nav class="five columns  top-bar"> 
<ul strong class="hide-for-larged .hide-for-xlarged"
        <!-- Title Area -->
        <li class="name">
          <h1>
            <a href="#">
             Menu
            </a>
          </h1>
        </li>
        <li class="toggle-topbar"><a href="#"></a></li>
      </ul></strong>
<section> 
<ul>

<li> <a href="<?php bloginfo('url');?>"><span class="fs1" aria-hidden="true" data-icon="&#xe000;"> </span> Home  </a> </li>
<li> <a href="<?php bloginfo('url');?>/wp-login.php?action=register"><span class="fs1" aria-hidden="true" data-icon="&#xe040;"> </span>Register</a> </li>
<li> <a href="<?php bloginfo('url');?>/wp-login.php"> <span class="fs1" aria-hidden="true" data-icon="&#xe04b;"> </span>  Login</a> </li>



</ul>
</section>

</nav>
</header>