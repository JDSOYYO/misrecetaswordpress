<?php
/*
 * comments.php
 * @tswwide
 */
if ( post_password_required() )
        return;
?>    
    <div id="comments" class="comments-area"> 
      <hr>   
        <?php if ( have_comments() ) : ?>
            <h2 class="comments-title">
               <?php the_title(); ?> 
            </h2>
    
            <ol class="comment-list">
                <?php
                    wp_list_comments( array(
                        'style'       => 'ol',
                        'short_ping'  => true,
                        'avatar_size' => 42,
                    ) );
                ?>
            </ol><!-- .comment-list -->
    
            <?php
                // Are there comments to navigate through?
                if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
            ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'tswwide' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'tswwide' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'tswwide' ) ); ?></div>
            </nav><!-- .comment-navigation -->
            <?php endif; // Check for comment navigation ?>
    
            <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.' , 'tswwide' ); ?></p>
            <?php endif; ?>
    
        <?php endif; // have_comments() ?>
    
        <?php comment_form(); ?>
    
    </div><!-- #comments -->