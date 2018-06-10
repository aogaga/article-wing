</section>

<!--top ads area ends here -->

<div class="row">


<section class=" thirteen columns">


<ul class="accordion">
  <li >
    <div class="title">
      <h3 class="dtt bk"> <span class="fs1" aria-hidden="true" data-icon="&#xe002;"> </span>Articles Categories </h3>
    </div>
    <div class="content">
    
    <ul class="mycat";> 
<?php
$taxonomy = 'Article_Category';
$queried_term = get_query_var($taxonomy);
$terms = get_terms($taxonomy, 'slug='.$queried_term);
if ($terms) {
  echo '<ul>';
  foreach($terms as $term) {
    echo '<li><a href="'.get_term_link($term->slug, $taxonomy).'">'.$term->name.'</a></li>';
  }
  echo '</ul>';
}
?>

    </ul>


      
    </div>
  </li>


</ul>





 </section>

</div>