<?php

require_once('inc/menu.php');

add_action('init', 'article_register_init');  
 function article_register_init() {  
 $labels = array( 
 'name' => _x('Articles', 'post type general name'),
 'singular_name' =>  _x('Article', 'post type singular name'), 
 'add_new' =>  _x('Add New', 'article'), 
 'add_new_item' =>  __('Add New Article'),
 'edit_item' =>  __('Edit Article '), 
 'new_item' =>  __('New Article'),
 'all_items' => __('All Articles'),
 'view_item' =>  __('View Article'), 
 'search_items' =>  __('Search Articles'),
 'not_found' =>  __('Nothing Articles  found'), 
 'not_found_in_trash' =>  __('Nothing Articles found in Trash'),
 'parent_item_colon' =>  '' ,
 'menu_name'=> 'Articles'); 


 $args = array( 
 'labels' =>  $labels,
 'public' =>  true,
 'publicly_queryable' =>  true,
 'show_ui' =>  true,
 'query_var' =>  true,
 'menu_icon' =>  get_stylesheet_directory_uri() . '/images/recipessmall.png', 
 'rewrite' =>   array('slug' => 'articles'),
 'capability_type' =>  'post',
 'hierarchical' =>  false,
 'menu_position' =>  null,
 'has_archive' => true,
 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt','categories', 'comments' ), 
 'taxonomies' => array('Article_Category','keywords'));
 register_post_type( 'articles' , $args ); }



#------------------------------------- 

add_action( 'pre_get_posts', 'add_my_custom_post_type' );

function add_my_custom_post_type( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'page', 'articles' ) );
  return $query;
}



function replace_howdy( $wp_admin_bar ) {
	    $my_account=$wp_admin_bar->get_node('my-account');
	    $newtitle = str_replace( 'Howdy,', 'Logged in as', $my_account->title );            
	    $wp_admin_bar->add_node( array(
	        'id' => 'my-account',
	        'title' => $newtitle,
	    ) );
	}
	add_filter( 'admin_bar_menu', 'replace_howdy',25 );






#--------------------
function article_alert( $alert ) {
  global $post, $post_ID;

  $alert['articles'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => sprintf( __('Articles updated. <a href="%s">View article</a>', 'your_text_domain'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.', 'your_text_domain'),
    3 => __('Custom field deleted.', 'your_text_domain'),
    4 => __('Article updated.', 'your_text_domain'),
    /* translators: %s: date and time of the revision */
    5 => isset($_GET['revision']) ? sprintf( __('Article restored to revision from %s', 'your_text_domain'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Article published. <a href="%s">View article</a>', 'your_text_domain'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Article saved.', 'your_text_domain'),
    8 => sprintf( __('Article submitted. <a target="_blank" href="%s">Preview article</a>', 'your_text_domain'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Article scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview article</a>', 'your_text_domain'),
      // translators: Publish box date format, see http://php.net/date
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Article draft updated. <a target="_blank" href="%s">Preview article</a>', 'your_text_domain'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );

  return $alert;
}
add_filter( 'post_updated_messages', 'article_alert' );


#-----------------------------------------------------------
function article_help( $article_contextual_help, $screen_id, $screen ) { 
  //$contextual_help .= var_dump( $screen ); // use this to help determine $screen->id
  if ( 'articles' == $screen->id ) {
    $article_contextual_help =
      '<p>' . __('Here are a few list of things that you should remember when publishing your articles :', 'your_text_domain') . '</p>' .
      '<ul>' .
      '<li>' . __('Your article title.', 'your_text_domain') . '</li>' .
      '<li>' . __('Please input your article summary in the big text box labelled Excerpt.', 'your_text_domain') . '</li>' .
      '</ul>' .
      '<p>' . __('If you want to schedule an article to be published in the future:', 'your_text_domain') . '</p>' .
      '<ul>' .
      '<li>' . __('Under the Publish module, click on the Edit link next to Publish.', 'your_text_domain') . '</li>' .
      '<li>' . __('Change the date to the date you want your article to be published, then click on Ok.', 'your_text_domain') . '</li>' .
      '</ul>' .
      '<p><strong>' . __('For more information:', 'your_text_domain') . '</strong></p>' .
      '<p>' . __('send us an email at help@articleswing.com', 'your_text_domain') . '</p>' .
      '<p>' . __('or simply header to the user forum for more help', 'your_text_domain') . '</p>' ;
  } elseif ( 'edit-book' == $screen->id ) {
    $article_contextual_help = 
      '<p>' . __('This is the help screen displaying the table of books blah blah blah.', 'your_text_domain') . '</p>' ;
  }
  return $article_contextual_help;
}
add_action( 'contextual_help', 'article_help', 10, 3 );





#-----------------------------------------------------------



add_action( 'init', 'article_taxonomies', 0 );

function article_taxonomies() 
{
  
  // Ingredients
    $keyword_labels = array(
    'name' => _x( 'keywords', 'taxonomy general name' ),
    'singular_name' => _x( 'keyword', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search in keywords' ),
    'popular_items' => __( 'Popular keywords' ),
    'all_items' => __( 'All keywords' ),
    'most_used_items' => null,
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit keyword' ), 
    'update_item' => __( 'Update keyword' ),
    'add_new_item' => __( 'Add new keyword' ),
    'new_item_name' => __( 'New keyword name' ),
    'separate_items_with_commas' => __( 'Separate keywords with commas' ),
      'add_or_remove_items' => __( 'Add or remove keywords' ),
      'choose_from_most_used' => __( 'Choose from the most used keywords' ),
    'menu_name' => __( 'keywords' ),
  );
  register_taxonomy('Keywords',array('articles', 'posts'),array(
    'hierarchical' => false,
    'labels' => $keyword_labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array('slug' => 'keywords' )
  ));










  // Meal type
  $article_cat_labels = array(
    'name' => _x( 'Article Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Article Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search in Article Category' ),
    'all_items' => __( 'All Article Categories' ),
  
    'edit_item' => __( 'Edit Article Category' ), 
    'update_item' => __( 'Update Article Category' ),
    'add_new_item' => __( 'Add new Article Category' ),
    'new_item_name' => __( 'New Article Category' ),
    'menu_name' => __( 'Article Category' ),
  );
  register_taxonomy('Article_Category',array('articles'),array(
    'hierarchical' => true,
    'labels' => $article_cat_labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'Article_Category' )
  ));
  
}



// Add new Custom Post Type icons
add_action( 'admin_head', 'cooking_icons' );
function cooking_icons() {
?>
  <style type="text/css" media="screen">
    #menu-posts-articles .wp-menu-image {
      background: url(<?php bloginfo('url') ?>/wp-content/themes/articlewing/images/recipessmall.png) no-repeat 6px !important;
    }
    .icon32-posts-articles {
      background: url(<?php bloginfo('url') ?>/wp-content/themes/articlewing/images/recipes.png) no-repeat !important;
    }
    #menu-posts-photos .wp-menu-image {
      background: url(<?php bloginfo('url') ?>/wp-content/themes/articlewing/images/photosmall.png) no-repeat 6px !important;
    }
    .icon32-posts-photos {
      background: url(<?php bloginfo('url') ?>/wp-content/themes/articlewing/images/photo.png) no-repeat !important;
    }
    #menu-posts-videos .wp-menu-image {
      background: url(<?php bloginfo('url') ?>/wp-content/themes/articlewing/images/videosmall.png) no-repeat 6px !important;
    }
    .icon32-posts-videos {
      background: url(<?php bloginfo('url') ?>/wp-content/themes/articlewing/images/video.png) no-repeat !important;
    }

    </style>

<?php } 

# function to cut and reduce the size of post on the home 
function content($num) {
$theContent = get_the_content();
$output = preg_replace('/<img[^>]+./','', $theContent);
$output = preg_replace( '/<blockquote>.*<\/blockquote>/', '', $output );
$output = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $output );
$limit = $num+1;
$content = explode(' ', $output, $limit);
array_pop($content);
$content = implode(" ",$content)."...";
echo $content;
}

# theme supports for html5 tags
// Clean up the <head>
  function removeHeadLinks() {
      remove_action('wp_head', 'rsd_link');
      remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
      register_sidebar(array(
        'name' => __('Sidebar Widgets','html5reset' ),
        'id'   => 'sidebar-widgets',
        'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
      ));
    }
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); 
  

# comment function 
function add_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'del';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");
  


// Add custom avatar
add_filter( 'avatar_defaults', 'custom_avatar' );

function custom_avatar ($avatar_defaults) {
$myavatar = get_stylesheet_directory_uri() . '/images/custom-avatar.png';
$avatar_defaults[$myavatar] = "Branded Avatar";
return $avatar_defaults;
}




#--------------- sidebar starts here 
function bones_register_sidebars() {
    register_sidebar(array(
      'id' => 'sidebar1',
      'name' => __('Sidebar 1', 'bonestheme'),
      'description' => __('The first (primary) sidebar.', 'bonestheme'),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
    ));
    }


	
	add_action('pre_get_posts', 'filter_posts_list');
function filter_posts_list($query)
{
    //$pagenow holds the name of the current page being viewed
     global $pagenow;
 
    //$current_user uses the get_currentuserinfo() method to get the currently logged in user's data
     global $current_user;
     get_currentuserinfo();
     
        //Shouldn't happen for the admin, but for any role with the edit_posts capability and only on the posts list page, that is edit.php
        if(!current_user_can('administrator') && current_user_can('edit_posts') && ('edit.php' == $pagenow))
     {
        //global $query's set() method for setting the author as the current user's id
        $query->set('author', $current_user->ID);
		$screen = get_current_screen();
 add_filter('views_'.$screen->id, 'remove_post_counts');
		
        }
}
	
	function remove_post_counts($posts_count_disp)
{
    //$posts_count_disp contains the 3 links, we keep 'Mine' and remove the other two.
    unset($posts_count_disp['all']);
        unset($posts_count_disp['publish']);
        unset($posts_count_disp['trash']);
        return $posts_count_disp;
}
	
	
?>





