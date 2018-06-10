

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
<div class="published"> <span class="fs1" aria-hidden="true" data-icon="&#xe152;">:


 <?php the_time(get_option('date_format')); ?>
</span></div>



<?php the_content();?>
<span>tage<?php ; ?> </span>

</article>

   <?php endwhile; ?>
<?php else : ?>

  <p class="excuse"> not sure what you are looking for</p>
<?php endif; ?>  





 </div>


</div>






  <?php comments_template();?> 





</div>


<aside class="four columns"> 
	<?php  get_sidebar()?>
</aside>

</section>


<!-- main wrapper ends-->
</div>
<section class="row">

<p>See Other Articles published  by <span class="fs1" aria-hidden="true" data-icon="&#xe040;"> <?php the_author_posts_link(); ?></p> </section>
<?php get_footer();?>