<?php
//  @header.php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
			<?php
				wp_title(' - ');
				// verificar as alternativas
			/* if ( is_single() ) { single_post_title(); }
				elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
				elseif ( is_page() ) { single_post_title(''); }
				elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
				elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
				else { bloginfo('name'); wp_title('|'); get_page_number(); } */
			?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/full-style.css">
	<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
	<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<img src="<?php header_image(); ?>" <?php /* height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" */ ?> />