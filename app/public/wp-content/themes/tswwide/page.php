<?php
/*
Template Name: Page
*/

get_header(); ?>
    <div class="grids">
        <div class="grid-10" role="main">           
            <section class="grid-7" class="content" id="primary" role="main">
                 <?php if (have_posts()) : ?>
                 <?php while (have_posts()) : the_post(); ?>
                 <article id="post-<?php the_ID(); ?>">
                     <header>
<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h2>
                      <p class="small"><?php the_time('F jS, Y') ?> / <?php the_author() ?></p>
                      </header>
                        <div class="entry">
		          <?php the_content(); ?>
                        </div>
                          <br />  
                          <?php comments_template(); ?> 
                  <?php endwhile; ?>
                  <?php endif; ?>
                  </article>    
            </section><!-- ends grid-7 content -->
                <section class="grid-3">
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <article id="primary-sidebar"><?php dynamic_sidebar( 'sidebar-1' ); ?></article>
                <?php endif; ?>
                </section>
        </div><!-- ends grid-10 page -->
    </div><!-- ends main -->
<?php get_footer(); ?>