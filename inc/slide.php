<section class="row"> 

<div class="seven columns">

<p><h4 class="bk"> <?php
$result = count_users();
echo 'Over ', $result['total_users'], ' registered authors'; ?>  and <?php $numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE (post_status = 'publish' AND post_type = 'articles')");
    if (0 < $numposts) $numposts = number_format($numposts); ?><?php echo $numposts ?> published Articles. receive online recognition today! </h4></p>
<div> 


<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
</div>
 </div>
<div class="six columns"> 

<div class="wrap"> 
<p></p>
<form class="row collapse" action="<?php bloginfo('url'); ?>" method="get">
  <div class="ten mobile-three columns">
    <input type="text" name="s"  id="search" value="<?php the_search_query(); ?>" />
  </div>
  <div class="two mobile-one columns">

  	<input type="submit" class="button expand postfix" value="Search" />
  
  </div>
</form>








</div>
</div>

</section>