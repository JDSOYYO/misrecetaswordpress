<?php
/**
 * The main template file. index.php
 *
 * @package WordPress
 * @subpackage tswwide
 * @since tswwide 1.0
 */
 
get_header(); ?>
    <div class="grids">
        <div class="grid-10">           
            <section class="grid-7" id="primary" role="main">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
                <header id="post-<?php the_ID(); ?>">
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="small"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></p>
                </header>
                <article class="entry">   
                    <?php the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                      <div class="postmetadata">
                      <p><?php the_category(', ') ?> <?php the_author(); ?></p>
                      <p><?php edit_post_link(__('Edit', 'tswwide'), '<span>', '</span>', null, 'button-primary button-edit-post-link' ); ?></p>
                      </div>
                <?php endwhile; ?>         
                        <div class="navigation">
                        <?php posts_nav_link(); ?>
                        </div>         
                <?php endif; ?>
                    </article>
                        <?php comments_template(); ?>
            </section>
                <section class="grid-3"><?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <div id="primary-sidebar">	
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>
                        <?php endif; ?>
                </section>
        </div>
    </div><!-- ends main -->
<?php get_footer(); ?>