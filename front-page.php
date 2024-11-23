<?php

/* Template Name: Home */

?>


<?php
	get_header();
?>


            <?php
if (function_exists('the_custom_logo')) {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id);

    // Check if $logo is not false before using it
    if ($logo !== false) {
        ?>
        <img class="mb-3 mx-auto logo" src="<?php echo $logo[0]; ?>" alt="logo">
        <?php
    }
}
?>


            





				


		<article class="content px-3 py-5 p-md-5">
	    <div class='container'>
			<p class="mt-3 lead">Welcome text</p>

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="C:\laragon\www\Empower-LLC\wp-content\themes\empower\images\truck.png" class="d-block w-100" alt="1">
				  </div>
				  <div class="carousel-item">
					<img src="empower/images/product.jpg" class="d-block w-100" alt="2">
				  </div>
				  <div class="carousel-item">
					<img src="empower/images/windows2.jpg" class="d-block w-100" alt="3">
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>

			<div class="row row-cols-1 mt-4 row-cols-md-2">
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">:</h5>
					  <p class="card-text">     

                        </p>

					</div>
				  </div>
				</div>
				
				
		</div>
	    </article>
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
            <p class="copyright">OffLane/Elias Sinani 2024©</a></p>
		   
	    </footer>
    
    </div>
    
	<?php

	get_footer();
	?>