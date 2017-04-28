<?php

// Background personalizavel
$default_background = array(
  'default-color'          => 'fff',
  //'default-image'          => get_template_directory_uri() . '/images/',
  //'default-repeat'         => 'no-repeat',
  //'default-position-x'     => 'center',
  //'default-attachment'     => 'fixed',
);
add_theme_support( 'custom-background', $default_background );
// ***************

//  Header personalizavel
$defaults = array(
	//'default-image'          => '',
	//'random-default'         => false,
	//'width'                  => 0,
	//'height'                 => 0,
	//'flex-height'            => false,
	//'flex-width'             => false,
	//'default-text-color'     => '',
	//'header-text'            => true,
	//'uploads'                => true,
	//'wp-head-callback'       => '',
	//'admin-head-callback'    => '',
	//'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
// ***************