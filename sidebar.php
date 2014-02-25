<?php
/**
 * The sidebar containing the main widget area.
 *
 * @subpackage Progression
 * @since Progression 1.3
 */
?>
<aside id="sidebar">
	<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 'Sidebar Widgets' )) : else :
		/* default sidebar widgets */
		the_widget( 'WP_Widget_Search' );
		the_widget( 'WP_Widget_Recent_Posts' );
		the_widget( 'WP_Widget_Recent_Comments' );
		the_widget( 'WP_Widget_Archives' );
		the_widget( 'WP_Widget_Categories' );
	endif; ?>
</aside>