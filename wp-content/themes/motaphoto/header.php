<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Nathalie Mota - Photographe Freelance</title>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/theme.css">

        <?php wp_head(); ?>  <!-- permet d'incérer toutes les informations à mettre en en-tête -->
        </head>

    <body <?php body_class(); ?>>
    
        <?php wp_body_open(); ?>

        <header>
            <div class="top-bar">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.webp" alt="Logo">
            
                <?php wp_nav_menu(['theme_location' => 'header']) ?>   
            </div>

                

        <hr />
    </header>
