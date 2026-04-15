<?php
/**
 * Footer
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<footer class="site-footer">
    <p><?php printf( esc_html__( 'Dernière mise à jour : %s', 'autour-dune-mousse' ), esc_html( get_the_modified_date() ? get_the_modified_date() : date_i18n( get_option( 'date_format' ) ) ) ); ?></p>
    <?php if ( has_nav_menu( 'footer' ) ) : ?>
        <nav aria-label="<?php esc_attr_e( 'Pied de page', 'autour-dune-mousse' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'container'      => false,
                'depth'          => 1,
                'items_wrap'     => '%3$s',
            ) );
            ?>
        </nav>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
