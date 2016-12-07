<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if ( is_home() && !is_front_page() ) : ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
        <?php endif; ?>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content' ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
        <?php the_post_navigation( array(
                'prev_text' => __( 'Previous page', 'twentysixteen' ),
                'next_text' => __( 'Next page', 'twentysixteen' )
        ) ); ?>
    </main>
</div>
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <?php get_sidebar( null ); ?>
<?php endif; ?>

<?php get_footer(); ?>