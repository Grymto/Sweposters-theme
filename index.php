<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php wp_head(); ?> <!-- This includes essential WordPress styles and scripts -->
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_header(); ?> <!-- Includes the header.php file -->

    <main id="main" class="site-main">
        <?php
        // Start the Loop
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                the_content(); // Display the content of the current post or page
            endwhile;
        else :
            echo '<p>No content found</p>'; // Optional: Display a message if no posts are found
        endif;
        ?>
    </main>

    <?php get_footer(); ?> <!-- Includes the footer.php file -->

    <?php wp_footer(); ?> <!-- Ensures that scripts and other necessary footer code are properly loaded -->
</body>

</html>