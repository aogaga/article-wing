
<footer class="row"> 
<div class="four columns"> 

<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
    <div id="secondary" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-4' ); ?>
    </div><!-- #secondary -->
  <?php endif; ?>
</div>

<div class="five columns"> 

<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
    <div id="secondary" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-5' ); ?>
    </div><!-- #secondary -->
  <?php endif; ?>
</div>



<div class="four columns"> 

<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
    <div id="secondary" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-6' ); ?>
    </div><!-- #secondary -->
  <?php endif; ?>
</div>





</footer>




  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.forms.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.reveal.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.orbit.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.navigation.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.buttons.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.tabs.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.tooltips.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.accordion.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.placeholder.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.alerts.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.topbar.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.joyride.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.foundation.clearing.js"></script>
  <script src="javascripts/jquery.foundation.magellan.js"></script>


  

  <script src="<?php bloginfo('template_directory');?>/javascripts/jquery.js"></script>
  <script src="<?php bloginfo('template_directory');?>/javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="<?php bloginfo('template_directory');?>/javascripts/app.js"></script>

  
    <script>
    $(window).load(function(){
      $("#featured").orbit();
    });
    </script> 
  


  <script type='text/javascript'>
   $(window).load(function() {
       $('#featuredContent').orbit({ fluid: '16x6' });
   });
</script>
<?php wp_footer(); ?>
</body>
</html>
