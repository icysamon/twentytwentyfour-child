<?php

// Function to add prism.css and prism.js to the site
function add_prism() {
    
    // Register prism.css file
    wp_register_style(
        'prismCSS', // handle name for the style 
        get_stylesheet_directory_uri() . '/prism.css' // location of the prism.css file
    );

    // Register prism.js file
    wp_register_script(
        'prismJS', // handle name for the script 
        get_stylesheet_directory_uri() . '/prism.js' // location of the prism.js file
    );

    // Enqueue the registered style and script files
    wp_enqueue_style('prismCSS');
    wp_enqueue_script('prismJS');
}
add_action('wp_enqueue_scripts', 'add_prism');

// Mathjax3
function add_mathjax_script() {
    wp_enqueue_script('mathjax-polyfill', 'https://polyfill.io/v3/polyfill.min.js?features=es6', array(), '1.0', true);
    wp_enqueue_script('mathjax-script', 'https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js', array('mathjax-polyfill'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_mathjax_script');

