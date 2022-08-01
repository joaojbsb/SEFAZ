<?php if( is_active_sidebar( 'wp-sidebar-1' )): ?>
        <aside class="widget-blog my=10px">
                <?php dynamic_sidebar( 'wp-sidebar-1' ); ?>
        </aside>
<?php else: echo " Criar Widget "; endif; ?>