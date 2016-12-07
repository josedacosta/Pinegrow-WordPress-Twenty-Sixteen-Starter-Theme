
    <?php if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) { return; } ?>
    <aside id="content-bottom-widgets" class="content-bottom-widgets" role="complementary">
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <div class="widget-area">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
            <div class="widget-area">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div>
        <?php endif; ?>
    </aside>
