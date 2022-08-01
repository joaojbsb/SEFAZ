<?php if( is_active_sidebar( 'sidebar-1' )): ?>
    <asside class="sidebar col-md-4 h-100">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </asside>
<?php endif; ?>