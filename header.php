<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php wp_head(); ?> <!-- This includes essential WordPress styles and scripts -->
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="top-header">
    <h1 class="Logo">
        <a href="http://sweposters.se/" title="Sweposters Home">Sweposters</a>
    </h1>
</div>

    <header class="header">
        <div class="headerleft">
            <div class="logo">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu', // Ensure this matches the registered location
                    'menu_id' => 'primary-menu',
                    'container' => 'nav',
                    'container_class' => 'menu'
                ));
                ?>
            </div>
        </div>
    </header>