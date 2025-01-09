<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?> 
    <link rel="stylesheet" href="style.css">
</head>

<body <?php body_class(); ?>>
<footer>
    
    <div class="contact-info">
    <p class="contact-info">Kundservice har öppet helgfria vardagar kl 08.30-18.00 via telefon 070-000 00 00.</p>
</div>


        <div class="rights">
            <p>&copy; <?php echo date('Y'); ?> Sweposters. All rights reserved.</p>
        </div>
</footer>

<?php wp_footer(); ?> 
</body>
</html>
