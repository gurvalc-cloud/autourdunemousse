<?php
/**
 * Autour d'une Mousse — fonctions du thème
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! function_exists( 'adm_setup' ) ) :
    function adm_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'automatic-feed-links' );

        // Pas de menu à l'origine, mais on enregistre un emplacement optionnel pour le footer.
        register_nav_menus( array(
            'footer' => __( 'Pied de page', 'autour-dune-mousse' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'adm_setup' );

function adm_enqueue() {
    // Google Fonts — Courier Prime + Special Elite
    wp_enqueue_style(
        'adm-fonts',
        'https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400&family=Special+Elite&display=swap',
        array(),
        null
    );
    wp_enqueue_style( 'adm-style', get_stylesheet_uri(), array( 'adm-fonts' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'adm_enqueue' );

/**
 * Largeur de contenu (utile pour certains blocs média).
 */
function adm_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'adm_content_width', 680 );
}
add_action( 'after_setup_theme', 'adm_content_width', 0 );
