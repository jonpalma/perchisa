<?php
//Menu
register_nav_menus( array(
	'menu' => 'Menu superior',
	));

//Agregar thumbs para los post
add_theme_support('post-thumbnails');
add_image_size('list_articles_thumbs', 263,202, true);

//Sidebar
register_sidebar( array(
	'name' => 'Sidebar',
	'before_widget' => '<section class="widget">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
//footers
register_sidebars( 4, array(
	'name' => 'Footer%d',
	'before_widget' => '<section class="widget">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));


//Title not empty
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'PERCHISA - Expertos en perforación de pozos profundos en Chihuahua, México.', 'theme_domain' );
  }
  return $title;
}

//trim excerpt length
function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 112);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
$excerpt = $excerpt.' [ ... ]';
return $excerpt;
}

//Custom Nav Menu Walker Function
class themeslug_walker_nav_menu extends Walker_Nav_Menu {
  
// add classes to ul sub-menus
	function start_lvl( &$output, $depth ) {
	    // depth dependent classes
	    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
	    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
	    $class_names = 'dropdown-menu';
	  
	    // build html
	    $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}
	
	//Check if element has children
	 function display_element ($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
    {
        // check, whether there are children for the given ID and append it to the element with a (new) ID
        $element->hasChildren = isset($children_elements[$element->ID]) && !empty($children_elements[$element->ID]);

        return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

	// add main/sub classes to li's and links
	 function start_el( &$output, $item, $depth, $args ) {
	    global $wp_query;
	    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
	  
	    // build html
	    if ($item->hasChildren) {
	    	$output .= $indent . '<li class="dropdown">';
	    } else {
	    	$output .= $indent . '<li>';
	    }
	    
	    // link attributes
	    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
	    $attributes .= ' class="' . ( $item->hasChildren ? 'dropdown-toggle' : '' ) . '"';
	  
	  	if($item->hasChildren) {
	  		$item_output = sprintf( '%1$s<a%2$s data-toggle="dropdown">%3$s%4$s%5$s<b class="caret"></b></a>%6$s',
	        $args->before,
	        $attributes,
	        $args->link_before,
	        apply_filters( 'the_title', $item->title, $item->ID ),
	        $args->link_after,
	        $args->after
	    	);
	  	} else {
	  		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
	        $args->before,
	        $attributes,
	        $args->link_before,
	        apply_filters( 'the_title', $item->title, $item->ID ),
	        $args->link_after,
	        $args->after
	    	);
	  	}
	    
	  
	    // build html
	    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

?>