<?php
get_header(); ?>

      <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
              <?php if ( have_posts() ) : ?>
                  <?php while ( have_posts() ) : the_post(); ?>
                      <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                          <nav id="image-navigation" class="navigation image-navigation">
                              <div class="nav-links">
                                  <div class="nav-previous">
                                      <?php previous_image_link( null, __( 'Previous Image', 'twentysixteen' ) ); ?>
                                  </div>
                                  <div class="nav-next">
                                      <?php next_image_link( null, __( 'Next Image', 'twentysixteen' ) ); ?>
                                  </div>
                              </div>
                          </nav>
                          <header class="entry-header">
                              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                          </header>
                          <div class="entry-content">
                              <div class="entry-attachment">
                                  <?php
		$image_size = apply_filters( 'twentysixteen_attachment_size', 'large' );
		echo wp_get_attachment_image( get_the_ID(), $image_size );
                          ?>
                                  <?php twentysixteen_excerpt( 'entry-caption' ); ?>
                              </div>
                              <?php the_content(); ?>
                              <?php wp_link_pages( array(
                                      'before' => array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>', 'pagelink' => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%', 'separator' => '<span class="screen-reader-text">, </span>', )
                              ) ); ?>
                          </div>
                          <footer class="entry-footer">
                              <?php twentysixteen_entry_meta(); ?>
                              <?php
	$metadata = wp_get_attachment_metadata();
	if ( $metadata ) {
		printf( '<span class="full-size-link"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
			esc_html_x( 'Full size', 'Used before full size attachment link.', 'twentysixteen' ),
			esc_url( wp_get_attachment_url() ),
			absint( $metadata['width'] ),
			absint( $metadata['height'] )
		);
	}
?>
                              <?php edit_post_link( sprintf(__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),get_the_title()), '<span class="edit-link">', '</span>' ); ?>
                          </footer>
                      </article>
                  <?php endwhile; ?>
              <?php endif; ?>
              <?php if ( comments_open() || get_comments_number() ) : ?>
                  <?php comments_template(); ?>
              <?php endif; ?>
              <?php the_post_navigation( array(
                      'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' )
              ) ); ?>
          </main>
      </div>
      <?php get_sidebar( null ); ?>

<?php get_footer(); ?>