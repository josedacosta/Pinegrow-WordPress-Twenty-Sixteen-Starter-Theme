<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
            </header>
            <div class="page-content">
                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>
                <?php get_search_form( true ); ?>
            </div>
        </section>
    </main>
    <?php get_sidebar( 'content-bottom' ); ?>
</div>
<?php get_sidebar( null ); ?>

<?php get_footer(); ?>