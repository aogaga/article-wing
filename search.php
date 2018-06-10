<?php
 get_header(); ?>

<section class="row">
<h2 class="twelve columns bk">  Search Result <?php echo get_search_query(); ?> </h2>
<!-- author area begins -->
<div class="nine columns">

<div class="thirteen columns article_layer"> 
<div class="wrap">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
<article> 


<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
<p><?php content('30'); ?></p>
<div class="published">   
  
<span class="fs1" aria-hidden="true" data-icon="&#xe152;">: <?php the_time(get_option('date_format')); ?> /
  <a href="<?php comments_link();?>"> 
    <span class="fs1" aria-hidden="true" data-icon="&#xe03c;"> </span> <?php comments_number('0', '1', '%');?> </a> 
     /   <a href="<?php the_permalink(); ?>">
           READ MORE</a>  /  <span class="fs1" aria-hidden="true" data-icon="&#xe017;">
 <?php echo get_the_term_list( $post->ID, 'Article_Category', ': ', ', ', '' ); ?> 
</span></div>
</article>

  <?php endwhile; ?>
<?php else : ?>

  <h4 class="excuse"> Your Search produced no result</h4>
<?php endif; ?>  



		<div class="navigation">
                                <?php if(!function_exists('wp_pagenavi')) : ?>
                                <div class="alignleft"><?php echo $next_page; ?></div>
                                <div class="alignright"><?php echo $prev_pages; ?></div>
                                <?php else : wp_pagenavi(); endif; ?>
                            </div>

 </div>


</div>








</div>


<aside class="four columns"> 
	<?php  get_sidebar()?>
</aside>

</section>


<!-- main wrapper ends-->
</div>

<?php get_footer();?>