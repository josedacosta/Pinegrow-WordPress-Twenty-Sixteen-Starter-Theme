<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <div>
                <header class="page-header">
                    <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
                    <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
                </header>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                <?php endwhile; ?>
                <?php the_post_navigation( array(
                        'prev_text' => array( 'prev_text' => __( 'Previous page', 'twentysixteen' ), 'next_text' => __( 'Next page', 'twentysixteen' ), 'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>', )
                ) ); ?>
            </div>
        <?php endif; ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
    </main>
</div>
<?php get_sidebar( null ); ?>

<?php get_footer(); ?>