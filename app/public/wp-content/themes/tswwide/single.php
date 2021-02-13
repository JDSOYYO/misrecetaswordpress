<?php
/* 
 * Template Name:  Single
 */

get_header(); ?>

    <div class="grids">
        <section class="grid-10" class="content" role="main">           
            <section class="grid-7" id="primary" role="main">
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <?php if(have_posts()) : ?>
                  <?php while(have_posts()) : the_post(); ?>         
                  <header>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="bypostauthor"> <?php the_author(); ?></p>
                  </header>
                    <article class="post-content">   
                      <?php the_post_thumbnail(); ?>
                      <?php the_content(); ?>
                    </article>
                        <div class="postmetadata">
                          <p>&#9733; <?php the_category(', ') ?></p>
                          <p> <?php the_tags(__( 'Related Topics: ', 'tswwide' ), ', ', ' ' ); ?></p>
                          <p><?php edit_post_link( __('Edit', 'tswwide'), '<span>', '</span>', null, 'button-primary button-edit-post-link' ); ?></p>
                        </div>
                    <?php comments_template(); ?>
                </div>
        <?php endwhile; endif; ?>     
                <div class="navigation">  
                <?php previous_post_link(' %link') ?> | <?php next_post_link(' %link ') ?>
                </div>
            </section>
                <section class="grid-3">
                  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                  <article id="primary-sidebar"><?php dynamic_sidebar( 'sidebar-1' ); ?></article>
                  <?php endif; ?>
                </section>
        </section>

    </div><!-- ends main -->
<?php get_footer(); ?>