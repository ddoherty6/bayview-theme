<?php
/**
 * Template part for displaying posts.
 */

?>
<li id="post" class="wp-block-post post type-post status-publish format-standard hentry">
    <!-- Post thumbnail -->
    <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'large' ); // full, large, medium, custom size
    endif;
    ?>
    <div class="post-text wp-container-4 wp-container-3 wp-block-group">
        <div class="wp-block-group__inner-container">
                <!-- Post Title -->
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h2 class="wp-block-post-title"><a href="'.esc_url( get_permalink() ).'" target="_self" rel="">', '</a></h2>' );
                endif;
                ?>
                <div class="wp-block-post-excerpt">               
                    <!-- Post Content -->
                    <?php if ( is_home() || is_archive() ) : ?>
                    <p class="wp-block-post-excerpt_excerpt">
                        <?php the_excerpt(); ?>
                    </p>
                    <?php elseif( is_single() ) : ?>
                        <p class="wp-block-post-excerpt_excerpt">
                            <?php
                                the_content();

                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ninestars' ),
                                    'after'  => '</div>',
                                ) );
                            ?>
                        </p>
                    <?php endif; ?>
                </div>

        </div>
    </div>
</li>