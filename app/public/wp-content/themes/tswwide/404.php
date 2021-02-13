<?php
/**
 * 404 error page not found page
 * @tswwide
 */
 
get_header(); ?>
<div id="wrapper">
    <div class="grids">
        <section class="grid-10" role="main">
            <nav>
            <?php wp_nav_menu ( array( 'theme_location' => 'header-menu' ) ); ?>
            </nav>
            <section class="grid-7">	<br>	
	        <h1><?php _e( 'Oh My! I can&#39;t find that page.', 'tswwide' ); ?> </h1>
<hr>
                <h2><?php _e( 'You may want to check out the articles below', 'tswwide' ); ?></h2>	 
<hr>    
        <article>
                <ul id="post-entry">
                <?php $tswwide_posts = get_posts('numberposts=-1&');
                  foreach($tswwide_posts as $post) : ?>
                <li><?php the_time('m/d/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach; ?>
                </ul>
        </article>
            </section>
                    <section class="grid-3"><?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <article id="primary-sidebar">	
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </article>
                                            <?php endif; ?>    
                    </section>
        </section>
    </div><!-- ends main -->
</div><!-- ends grids -->
<?php get_footer(); ?>