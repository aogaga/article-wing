<?php
/*
Template Name: Home
*/
?>
<?php get_header();?>

<?php 
include"inc/slide.php";

?>

<?php
include"inc/cat_navigation.php";
?>



<!-- search and category area ends here -->

<section class="row">
<div class="ten columns main2"> 
<!--main area ho hold front page ish -->

<div class="row">  

<div class="nine columns">
<h3 class="dotted bk">Featured Articles</h3>





<div class="wrap farticles"> 

<?php query_posts('Article_Category=Business,Relationship&orderby=rand&post_type=articles&posts_per_page=2');?> 
  <?php  if(have_posts()) : while(have_posts()) : the_post();?>


<h3 class="ltboder"> <a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>

<p><?php userphoto_the_author_photo( $curauth->ID ); ?>  <?php content('30'); ?> <a href="<?php the_permalink(); ?>">READ MORE</a></p>

 <div class="published2">   
<span class="fs1" aria-hidden="true" data-icon="&#xe152;">:
 <?php the_time(get_option('date_format')); ?>   </span> ->
 
  <span class="fs1" aria-hidden="true" data-icon="&#xe040;">
<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"> <?php  the_author();?> </a>
</span>

/
  <a href="<?php comments_link();?>"> 
<span class="fs1" aria-hidden="true" data-icon="&#xe03c;"> </span> <?php comments_number('0', '1', '%');?> </a> 
     /  
          <span class="fs1" aria-hidden="true" data-icon="&#xe017;">
 <?php echo get_the_term_list( $post->ID, 'Article_Category', ': ', ', ', '' ); ?> 



           <?php endwhile; ?>

<?php endif; ?>

</div>
</div>
</div></div>


 

<div class="four columns">

<h4  class="dotted bk">Featured Authors</h4>

<div class="wrap">








<article class="featured_authors clearfix"> 

<div id="authorlist"><ul><?php contributors(); ?></ul></div>
</article>





</div>
 </div>
</div>




<div class="row"> <h3 class="dotted bk"> Rencent articles </h3>

<div class="wrap"> 




<?php query_posts('post_type=articles&posts_per_page=10' ); ?>
	<?php  if(have_posts()) : while(have_posts()) : the_post();?>


<article class="featured_articlez"> 
<h3>
<a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
<p><?php content('50'); ?> </p>
 <div class="published2">   
  
<span class="fs1" aria-hidden="true" data-icon="&#xe152;">:
 <?php the_time(get_option('date_format')); ?>   </span> ->
 
  <span class="fs1" aria-hidden="true" data-icon="&#xe040;">
<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"> <?php  the_author();?> </a>
</span>

/
 
  <a href="<?php comments_link();?>"> 
<span class="fs1" aria-hidden="true" data-icon="&#xe03c;"> </span> <?php comments_number('0', '1', '%');?> </a> 
     /  




          <span class="fs1" aria-hidden="true" data-icon="&#xe017;">
 <?php echo get_the_term_list( $post->ID, 'Article_Category', ': ', ', ', '' ); ?> 
</span>
  


  </div>

</article>

           <?php endwhile; ?>
		   
		   
	 		   
		   
<?php else : ?>
  <p class="excuse"> not sure what you are looking for</p>
<?php endif; ?>




</div>
 </div>

</div>




<aside class="three columns">

<?php  get_sidebar()?>


</aside>

</section>


<!-- main wrapper ends-->
</div>




<?php get_footer();?>


