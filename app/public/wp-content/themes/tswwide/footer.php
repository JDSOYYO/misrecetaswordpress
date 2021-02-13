<footer id="footer">
    <p class="feeds"><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Latest Stories RSS', 'tswwide'); ?></a> | 
    <a href="<?php post_comments_feed_link(); ?>"><?php _e('Comments RSS', 'tswwide'); ?></a></p>  
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <div id="secondary" class="thirds"> 
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
        <?php endif; ?>
            <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                <div id="secondary-2" class="thirds">
                <?php dynamic_sidebar( 'sidebar-3' ); ?> 
            </div>
            <?php endif; ?>    
                <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                    <div id="secondary-3" class="thirds">
                    <?php dynamic_sidebar( 'sidebar-4' ); ?> 
                </div>
                <?php endif; ?>    
</footer> <!-- ends footer --><div class="clear"></div>
        <div class="credits">
<h5><?php _e('Copyright', 'tswwide'); ?> &copy; <?php echo date("Y") ?> <a href="<?php esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
	</h5>
        </div> <!-- ends credits -->
</div><!-- ends wrapper -->
<?php wp_footer(); ?>	
</body>
</html>
	
