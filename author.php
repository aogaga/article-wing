<?php 
/**
 * The template for displaying Author Archive pages.
 *
 * Used to display archive-type pages for posts by an author.
 *
 * Learn more: http://aogaga.com
 */

get_header(); ?>

<!--top ads area ends here -->




<!-- search and category area ends here -->


<section class="row">
  <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
<!-- author area begins -->
<div class="nine columns">
<h4 class="bk">  <p><span class='post-meta-name'><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></span>  Aka  
  <span class='post-meta-name'><?php echo $curauth->user_nicename; ?></span></p> </h4>
<div class="thirteen columns" id="author_layer"> 
<div class="row"> 

<div class="five columns"> 
<h2 class="author_name_main"> </h2>
<div class="author_pix">
<div class="pixwrapper">
<?php echo get_avatar( $curauth->ID, 20 ); ?>
</div>

   </div>








 </div>


<!-- author image ends here -->
<div class="eight columns">

<h4 class="bk"> About <span class='post-meta-name'><?php echo $curauth->display_name; ?></span></h4>

<ul class='post-meta'>

<dd><span class='post-meta-key'>Author's Name: <span class='post-meta-name'><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></span></dd>

  <dd><span class='post-meta-key'>Biography:</span> <?php echo $curauth->description; ?></dd> 
  
  <dd><span class='post-meta-key'>Country: <span class='post-meta-name'><?php $value = get_cimyFieldValue($curauth->ID, 'COUNTRY'); ?><?php echo $value; ?></span</dd>

 <dd><span class='post-meta-key'>Website:</span> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd> 

<span class='post-meta-tag'><?php
$post_author = $curauth->ID; //author id
$count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts WHERE post_author = $post_author AND post_type IN ('articles') and post_status = 'publish'" );
echo $curauth->display_name . '  '.'has written   '.' '.$count. ' '.'  Articles';
?></span>

</ul>





</div>





</div>


</div>




<div class="thirteen columns"> 
<h3 class="dotted bk">  Recent Articles from <span class='post-meta-name'><?php echo $curauth->display_name; ?></span></h3>
<div class="wrap">






<?php

    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

    ?>

  <?php  if(have_posts()) : while(have_posts()) : the_post();?>
  

<article class="recent_author_article"> 


<h4> <a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h4>
<p><?php content('40'); ?> </p>

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
  <p class="excuse"> This author has no published articles</p>
<?php endif; ?>


    <div class="navigation">
                             <?php if(!function_exists('wp_pagenavi')) : ?>
                                <div class="alignleft"><?php echo $next_page; ?></div>
                                <div class="alignright"><?php echo $prev_pages; ?></div>
                                <?php else : wp_pagenavi(); endif; ?>
                            </div>










 </div>
</div>



<div class="thirteen columns"> </div>

</div>



<aside class="four columns"> 

<h4 class="dotted bk">Adverts </h4>
<div class="wrapaside"> 

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <div id="secondary" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div><!-- #secondary -->
  <?php endif; ?>
</div>
</aside>


</section>


<!-- main wrapper ends-->
</div>

<?php get_footer();?>