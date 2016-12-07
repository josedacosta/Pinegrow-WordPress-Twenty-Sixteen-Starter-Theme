<?php
get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <div>
                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                </header>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'search' ); ?>
                <?php endwhile; ?>
                <?php the_post_navigation( array(
                        'prev_text' => array( 'prev_text' => __( 'Previous page', 'twentysixteen' ), 'next_text' => __( 'Next page', 'twentysixteen' ), 'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>', )
                ) ); ?>
            </div>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
    </main>
</section>
<?php get_sidebar( null ); ?>

<?php get_footer(); ?>