<?php
/**
 * Sidebar section
 * @package Ukemi Theme
 */
?>

<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

<aside id="sidebar-s1" class="sidebar-s1">

    <div class="sidebar">

        <div class="sidebar-inner">

            <?php dynamic_sidebar( 'sidebar' ); ?>

        </div>

    </div>

</aside>

<?php endif; ?>