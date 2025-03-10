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
    <p class="contact-info"> Kundservice har öppet helgfria vardagar kl 9-17.</p>
    <p class="contact-info"> Ni kan nå oss på mail info@sweposters.se <br> eller telefon 046-71 22 32 </p>
    <p class="contact-info"> Läs Sweposters<a href="https://sweposters.test/privacy-policy/">Köpvilkor</a>  </p>
</div>


        <div class="rights">
            <p>&copy; <?php echo date('Y'); ?> Sweposters. All rights reserved.</p>
        </div>
</footer>

<?php wp_footer(); ?> 
</body>
</html>
