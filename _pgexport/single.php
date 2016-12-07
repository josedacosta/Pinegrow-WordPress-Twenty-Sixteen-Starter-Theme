<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'single' ); ?>
                <?php if ( comments_open() || get_comments_number() ) : ?>
                    <?php comments_template(); ?>
                <?php endif; ?>
                <?php if ( is_singular( 'attachment' ) ) : ?>
                    <?php the_post_navigation( array(
                            'prev_text' => array( 'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ), )
                    ) ); ?>
                <?php elseif ( is_singular( 'post' ) ) : ?>
                    <?php the_post_navigation( array(
                            'prev_text' => array( 'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' . '<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' . '<span class="post-title">%title</span>', 'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' . '<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' . '<span class="post-title">%title</span>', )
                    ) ); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
    <?php get_sidebar( 'content-bottom' ); ?>
</div>
<?php get_sidebar( null ); ?>

<?php get_footer(); ?>