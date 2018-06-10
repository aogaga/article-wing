<?php get_header(); ?>

<section class="row">

<!-- author area begins -->
<div class="nine columns">

<div class="thirteen columns article_layer"> 
<div class="wrap">

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
<article> 


<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
<div class="published"> 
	<span class="fs1" aria-hidden="true" data-icon="&#xe152;">:


 <?php the_time(get_option('date_format')); ?>
</span>   /  <span class="fs1" aria-hidden="true" data-icon="&#xe017;">
 <?php echo get_the_term_list( $post->ID, 'Article_Category', ': ', ', ', '' ); ?> 
  /  Published by <span class="fs1" aria-hidden="true" data-icon="&#xe040;"> 
<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"> <?php  the_author();?> </a>
</span>

/
 
  <a href="<?php comments_link();?>"> 
<span class="fs1" aria-hidden="true" data-icon="&#xe03c;"> </span> <?php comments_number('0', '1', '%');?> </a>


</div>



<?php the_content();?>
<span class="fs1" aria-hidden="true" data-icon="&#xe1db;"> <?php echo get_the_term_list( $post->ID, 'Keywords', ': ', ', ', '' ); ?>  </span>


</article>

Total Views: <?php echo_views(get_the_ID()); ?> 


   <?php endwhile; ?>
<?php else : ?>

  <p class="excuse"> not sure what you are looking for</p>
<?php endif; ?>  





 </div>


</div>

<!-- Lockerz Share BEGIN -->
<a class="a2a_dd" href="http://www.addtoany.com/share_save"><img src="http://static.addtoany.com/buttons/share_save_171_16.png" width="171" height="16" border="0" alt="Share"/></a>
<script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
<!-- Lockerz Share END -->




  <?php comments_template();?> 





</div>


<aside class="four columns"> 
	<?php  get_sidebar()?>
</aside>

</section>


<!-- main wrapper ends-->
</div>

<section class="row">

<div class="thirteen columns">
<div class="wrap">
<p>See Other Articles Written by <span class="fs1" aria-hidden="true" data-icon="&#xe040;"> <?php the_author_posts_link(); ?></p>  
  </div>

</section>

<?php get_footer();?>