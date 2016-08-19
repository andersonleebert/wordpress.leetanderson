<?php

class Walker_Quickstart_Menu extends Walker_Nav_Menu {


    /**
     * At the start of each element, output a <li> and <a> tag structure.
     * 
     * Note: Menu objects include url and title properties, so we will use those.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $output .= sprintf( "\n<a class='item metria' href='%s'%s><label class='hide-for-small-only'>%s</label><label class='show-for-small-only'><i class='fa fa-%s'></i></label></a>\n",
            $item->url,
            ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
            $item->title,
            $item->description
        );
    }


}
function register_my_menus() {

	register_nav_menus(
			array(
				'left-menu' => __('Left half of menu'),
				'right-menu' => __('Right half of menu')

				)

		);
}

add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails', array( 'post' ) );

 ?>
