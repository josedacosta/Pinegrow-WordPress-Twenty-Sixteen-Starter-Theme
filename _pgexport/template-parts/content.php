
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <header class="entry-header">
            <?php if ( is_sticky() && is_home() && !is_paged() ) : ?>
                <span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
            <?php endif; ?>
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?> 
        </header>
        <?php twentysixteen_excerpt(); ?>
        <?php twentysixteen_post_thumbnail(); ?>
        <div class="entry-content">
            <?php the_content( sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>','twentysixteen'),get_the_title()) ); ?>
            <?php wp_link_pages( array(
                    'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    'separator' => '<span class="screen-reader-text">, </span>',
                    'pagelink' => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%'
            ) ); ?>
        </div>
        <footer class="entry-footer">
            <?php twentysixteen_entry_meta(); ?>
            <?php edit_post_link( sprintf(__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),get_the_title()), '<span class="edit-link">', '</span>' ); ?>
        </footer>
    </article>
