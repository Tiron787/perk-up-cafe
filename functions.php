<?php



remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles',     'print_emoji_styles' );
remove_action( 'admin_print_styles',  'print_emoji_styles' );

remove_action( 'wp_head', 'wp_resource_hints', 2 );
//remove dns-prefetch
remove_action( 'wp_head', 'wp_generator' );
//remove meta name = 'generator'
remove_action( 'wp_head', 'wlwmanifest_link' ); 
//remove wlwmanifest
remove_action( 'wp_head', 'rsd_link' );
// remove EditURI
remove_action( 'wp_head', 'rest_output_link_wp_head' );
// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate


function site_scripts() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css?family = Lato:300i, 400, 400i, 700|Montserrat:400, 500, 600, 700|Playfair+Display:400, 700, 700i|Oswald:400, 700, 700i',
        array(),
        null 
    );
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri(),
        array(),
        null 
    );
    wp_enqueue_style(
        'fonts',
         get_stylesheet_directory_uri() . '/css/fonts.css',
         array(),
        null 
        );
    wp_enqueue_style(
    'bootstrap',
     get_stylesheet_directory_uri() . '/css/bootstrap.css',
    array(),
    null 
);

wp_enqueue_script(
    'core-script', // 
    get_template_directory_uri() . '/js/core.min.js', 
    array(), 
    null, 
    true 
);

wp_enqueue_script(
    'html5shiv.min', // 
    get_template_directory_uri() . '/js/html5shiv.min.js', 
    array(), 
    null, 
    true 
);

wp_enqueue_script(
    'pointer-events-script', 
    get_template_directory_uri() . '/js/pointer-events.min.js', 
    array(), 
    null, 
    true 
);

wp_enqueue_script(
    'script', 
    get_template_directory_uri() . '/js/script.js', 
    array(), 
    null, 
    true 
);
}
add_action('wp_enqueue_scripts', 'site_scripts' );

function my_custom_admin_head_css() {
    echo '<style>ul.config-error {display:none !important;}[data-confiq-field][aria-invalid="true"]{border-color:grey;}</style>';
}
add_action( 'admin_head', 'my_custom_admin_head_css' );

function theme_add_google_fonts() {
    wp_enqueue_style(
        'google-fonts', 
        'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', 
        array(), 
        null
    );
}
add_action('wp_enqueue_scripts', 'theme_add_google_fonts');


