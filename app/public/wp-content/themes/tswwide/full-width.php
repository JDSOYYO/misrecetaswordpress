<?php
/*
 * Template Name: Full Width
 * @tsw-wide
 */

get_header(); ?>

    <div class="grids">
        <section class="grid-10" role="main">
            <section class="full-width content">         		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    <div class="entry-header">
			<h2 class="entry-title"><?php the_title(); ?></h2>			
<p class="post-author">Posted By <?php the_author(); ?> <?php the_time('F jS, Y') ?> : <?php $numComments = get_comments_number(); echo $numComments;?> <?php _e ('COMMENTS', 'tswwide'); ?></p>
		    </div> <!-- Ends of entry-author-header -->
                        <div class="entry-content">
			    <article class="content">
			    <?php the_content(); ?>
<?php wp_link_pages(array('before' => '', 'after' => '', 'next_or_number' => 'number','echo' => '0')); ?>
			    </article>
                            <p> <?php the_tags(); ?></p>
                        </div> <!-- Ends of entry-content -->
		<?php endwhile; endif; ?>
                    <?php comments_template(); ?>
            </section>               
        </section>
    </div><!-- ends main -->
<?php get_footer(); ?>