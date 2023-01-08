<?php 

/* Styles */
function load_css(){
  wp_register_style( 'styles', get_template_directory_uri(  ) . '/assets/tailwind/styles.css', array(), false, 'all' );
  wp_enqueue_style( 'styles' );
}
add_action( 'wp_enqueue_scripts', 'load_css' );

/* Scripts */
function load_js(){
  wp_register_script( 'script', get_template_directory_uri(  ) . '/assets/js/script.js', array(), false, true );
  wp_enqueue_script( 'script' );
}
add_action('wp_enqueue_scripts', 'load_js', 9999);

/* Options page */
if( function_exists('acf_add_options_page') ){
  acf_add_options_page();
}

/* Register ACF Blocks */
if(function_exists('acf_register_block_type')){
  add_action( 'acf/init', 'register_acf_block_types' );
};

function register_acf_block_types(){
  acf_register_block_type(
    array(
      'name' => 'code',
      'title' => __('Code'),
      'description' => __('A Custom Block Type'),
      'render_template' => 'blocks/code.php',
      'icon' => 'editor-paste-text',
    )
  );
}

?>