<?php

/* Template Name: About Us */

?>

<?php
	get_header();
?>


            <?php
if (function_exists('the_custom_logo')) {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id);

    if ($logo !== false) {
        ?>
        <img class="mb-3 mx-auto logo" src="<?php echo $logo[0]; ?>" alt="logo">
        <?php
    }
}
?>

<body>
    

    

<article class="about-section content px-3 py-5 p-md-5">
    <div class="container">			    
        <p>

        Welcome to Empower Windows - Where Precision Meets Quality! <br>We're dedicated to crafting windows that enhance your space's aesthetics, functionality, and energy efficiency.<br> With a fusion of traditional craftsmanship and cutting-edge technology, we redefine window standards.<br>

Our commitment to perfection drives us in every detail - from premium materials to rigorous testing, ensuring durability, functionality, and elegance. <br>Our state-of-the-art facility guarantees precision engineering, meeting and exceeding industry standards.<br>

We offer a diverse range of customizable options to suit any project - from modern designs to timeless classics.<br> Our dedicated team ensures your vision comes to life, backed by comprehensive support from consultation to installation.<br>

Trust Empower Windows to elevate your space with premium windows. <br>Experience the difference where craftsmanship meets excellence, empowering spaces and lives.<br>

Empower Windows - Where Windows Become Statements.</p>
        
    
    </div>
</article>

	    
	    
	    
        <footer class="footer text-center py-2 theme-bg-dark">
		   
            <p class="copyright">Empower/Elias Sinani</p>
		   
	    </footer>

</body>
</html>