<?php
/*
 * Template Name: Category
*/

get_header(); ?>

    <div class="grids">
        <section class="grid-10" role="main">           
            <section class="grid-7" class="content" role="main">
            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php if (is_category()) { ?>
            <h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'tswwide' ), single_cat_title( '', false ) ); ?></h1>
            
      <?php } ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_content(); ?>
                        <p class="postmetadata">
                        <?php the_category(', ') ?> <?php the_author(); ?><br />
                        <?php comments_popup_link ( __( '% Comments ', 'tswwide' ) ); ?> 
                        <?php edit_post_link ( __( 'Edit',  'tswwide'), '<span>', '</span>', null, 'button-primary button-edit-post-link' ); ?>
                        </p>
    <div class="navigation">
        <?php posts_nav_link(); ?>
    </div><?php endwhile; endif; ?>
            </section>
            
           <section class="grid-3"><?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <div id="primary-sidebar">	
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>
                        <?php endif; ?>
                </section>
        </section><!-- ends main -->
    </div><!-- ends main -->
<?php get_footer(); ?>