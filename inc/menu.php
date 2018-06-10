<?php

add_action( 'after_setup_theme', 'td_setup' );
function td_setup() {
    register_nav_menus( array(
        'menu_top' => 'Menu TOP' ,
        'menu_bot' => 'Menu BOT'
    ) );
}






#----- login form logo

function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url("<?php echo get_bloginfo( 'template_directory' ) ?>/images/logo.png");
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );




#loads login form stylesheet
function my_login_stylesheet() { ?>
    <link rel="stylesheet" id="custom_wp_admin_css"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/style-login.css'; ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );



#---- forces author page to display custom post types

function custom_post_author_archive( &$query )
{
    if ( $query->is_author )
        $query->set( 'post_type', 'articles' );
    remove_action( 'pre_get_posts', 'custom_post_author_archive' ); // run once!
}
add_action( 'pre_get_posts', 'custom_post_author_archive' );



# to display cpt

function add_pagination_to_author_page_query_string($query_string)
{
    if (isset($query_string['author_name'])) $query_string['post_type'] = array('articles');
    return $query_string;

}
add_filter('request', 'add_pagination_to_author_page_query_string');













#-----widgets

 
 
function twentytwelve_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'twentytwelve' ),
        'id' => 'sidebar-1',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Author page', 'twentytwelve' ),
        'id' => 'sidebar-2',
        'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Front ads area', 'twentytwelve' ),
        'id' => 'sidebar-3',
        'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );



        register_sidebar( array(
        'name' => __( 'footer area 1', 'twentytwelve' ),
        'id' => 'sidebar-4',
        'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


           register_sidebar( array(
        'name' => __( 'footer area 2', 'twentytwelve' ),
        'id' => 'sidebar-5',
        'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


           register_sidebar( array(
        'name' => __( 'footer area 3', 'twentytwelve' ),
        'id' => 'sidebar-6',
        'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );




}
add_action( 'widgets_init', 'twentytwelve_widgets_init' );








#last functions 

function contributors() {
global $wpdb;

$authors = $wpdb->get_results("SELECT ID, user_nicename from $wpdb->users ORDER BY RAND() DESC LIMIT 5");


foreach($authors as $author) {
echo "<li>";
echo '<div>';


echo "<a href=\"".get_bloginfo('url')."/?author=";
echo $author->ID;
echo "\">";
the_author_meta('first_name', $author->ID);
echo "</a>";

echo "<a href=\"".get_bloginfo('url')."/?author=";
echo $author->ID;
echo "\">";
echo get_avatar($author->ID);
echo "</a>";
$post_author = $author->ID; //author id
$count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts WHERE post_author = $post_author AND post_type IN ('articles') and post_status = 'publish'" );
echo $author->display_name . '  '.'has written   '.' '.$count. ' '.'  Articles';
echo "</div>";
echo "</li>";
}
}



#--------------------------------------------


function remove_menus()
{
    global $menu;
    global $current_user;
    get_currentuserinfo();

    if($current_user->user_login != 'admin')
    {
        $restricted = array(__('Posts'),
                            __('Media'),
                            __('Links'),
                            __('Pages'),
                            __('Comments'),
                            __('Appearance'),
                            __('Plugins'),
                            __('Users'),
                            __('Tools'),
                            __('Settings')
        );
        end ($menu);
        while (prev($menu)){
            $value = explode(' ',$menu[key($menu)][0]);
            if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
        }// end while

    }// end if
}
add_action('admin_menu', 'remove_menus');
?>
