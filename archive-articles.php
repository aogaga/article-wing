<?php
 echo "comming from the articles archive page";


 get_header(); ?>

<section class="row">

<!-- author area begins -->
<div class="nine columns">

<div class="thirteen columns article_layer"> 
<div class="wrap">

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
<article> 


<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
<?php the_content();?>


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

other post by this author  </section>
<?php get_footer();?>