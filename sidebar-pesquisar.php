<?php if( is_active_sidebar( 'wp-sidebar-2' )): ?>

    <aside class="widget-pesquisar">

        <?php dynamic_sidebar( 'wp-sidebar-2' ); ?>
    </aside>
<?php else: echo " Criar Widget "; endif; ?>