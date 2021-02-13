<?php
/**
 * The sidebar Widget area.
 *
 * @package WordPress
 * @subpackage TSW_Wide
 * @since TSWWide 1.0
 */
?>
<div class="sidebar">
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
<?php endif; ?>


</div>
