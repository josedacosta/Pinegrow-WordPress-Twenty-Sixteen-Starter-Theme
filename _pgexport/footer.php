
                </div>
                <footer id="colophon" class="site-footer" role="contentinfo">
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
                            <?php wp_nav_menu( array(
                                    'menu_class' => 'primary-menu',
                                    'container' => '',
                                    'theme_location' => 'primary'
                            ) ); ?>
                        </nav>
                    <?php endif; ?>
                    <?php if ( has_nav_menu( 'social' ) ) : ?>
                        <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
                            <?php wp_nav_menu( array(
                                    'menu_class' => 'social-links-menu',
                                    'container' => '',
                                    'link_before' => '<span class="screen-reader-text">',
                                    'link_after' => '</span>',
                                    'depth' => '1',
                                    'theme_location' => 'social'
                            ) ); ?>
                        </nav>
                    <?php endif; ?>
                    <div class="site-info">
                        <?php do_action( 'twentysixteen_credits' ); ?>
                        <span class="site-title"><a href="<?php echo esc_url( get_home_url() ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a>
                    </div>
                </footer>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>