<?php
/*
 * Template Name: Archive 
 * @uses the_excerpt
 */
get_header(); ?>

    <div class="grids">
        <section class="grid-10" role="main">           
            <section class="grid-7" class="content" role="main">
                <article class="archives">
                    <h1><?php esc_html_e ( 'Available ARCHIVES', 'tswwide' ); ?></h1>
                        <hr>
                    <h2><?php esc_html_e ( 'Archives by Month: ', 'tswwide' ); ?></h2>
                    <ul><?php wp_get_archives('type=monthly'); ?></ul>
                    <h2><?php esc_html_e ( 'Archives by Subject: ', 'tswwide' ); ?></h2>
                    <ul>
                    <?php wp_list_categories(); ?>
                    </ul>  
                </article>
	    </section>
                <section class="grid-3"><?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <div id="primary-sidebar">	
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>
                        <?php endif; ?>
                </section>
        </section>
    </div><!-- ends grids -->
<?php get_footer(); ?>