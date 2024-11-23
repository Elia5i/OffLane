<?php
/* Template Name: Our Products*/
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


            





				


<div class="main-wrapper">
	    
	    <section class="content px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="post mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="empower/images/product.jpg" alt="image">
					    <div class="media-body">
                        <h1 class="title mb-1">Our products</h1>
						    <div class="intro"></div>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>
			    <div class="post mb-5">
				    <div class="media">
					<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo get_template_directory_uri(); ?>/images/TheHoloKicks.jfif" alt="image">>
					    <div class="media-body">
						    <h3 class="title mb-1">The HoloKicks V2 </h3>
						    <div class="intro">Description: The HoloKicks V2 are the ultimate fusion of fashion and technology. Equipped with a holographic surface that shifts in color and pattern with your environment, these sneakers feature embedded AI-driven LEDs that light up in sync with your movement, creating mesmerizing visual effects. The AI inside analyzes your stride and recommends performance improvements via an augmented reality (AR) interface accessible through your smartphone. The shoes are lightweight with a high-tech knit upper that provides breathability and flexibility for all-day wear.
<br><br></div>
						    
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>
			    
			    <div class="post mb-5">
				    <div class="media">
					<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo get_template_directory_uri(); ?>/images/TheQuantumStride.jfif" alt="image">>
					    <div class="media-body">
						    <h3 class="title mb-1">The QuantumStride</h3>
						    
						    <div class="intro">Description: The QuantumStride sneakers combine quantum computing technology with cutting-edge design. Each shoe contains a miniaturized quantum processor that learns your walking habits over time, dynamically adjusting the cushioning, arch support, and weight distribution for the most efficient stride. The lightweight exterior is made from a durable, self-healing material that resists wear and tear, while the sole is engineered for a high energy return, perfect for both casual strolls and intense workouts. Available in metallic blue and silver, the QuantumStride is a perfect example of how technology is reshaping footwear..<br><br>


						    
							</div><!--//media-body-->
				    </div><!--//media-->
			    </div>
			    
				
		    </div>
			<div class="post mb-5">
				    <div class="media">
					<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo get_template_directory_uri(); ?>/images/EchoStrider.jpg" alt="image">>
					    <div class="media-body">
						    <h3 class="title mb-1">The EchoStrider</h3>
						    
						    <div class="intro">Description: The EchoStrider sneaker is all about synchronization between your body and the environment. These shoes feature a unique AI-based system that not only tracks your movements but also adjusts the shoe's sole and cushioning to match the terrain you're walking or running on. Whether you're navigating city streets or hiking rugged trails, the EchoStrider automatically fine-tunes its performance. The shoes also have a built-in environmental sound detector that adjusts audio cues based on ambient noise, allowing for a fully immersive experience as you run or walk.<br><br>


							</div><!--//media-body-->
				    </div><!--//media-->
			    </div>    

			    
				
		    </div>
			<div class="post mb-5">
    	<div class="media">
        	<!-- Correct way to reference image -->
        	<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo get_template_directory_uri(); ?>/images/VibeForce7.png" alt="image">
        	<div class="media-body">
            	<h3 class="title mb-1">VibeForce 7</h3>
            	<div class="intro">
                	Description: VibeForce 7 sneakers are designed for the high-energy, music-driven athlete. Equipped with a sound-reactive AI system, these shoes light up and adjust their pressure zones based on the music you're listening to...
            	</div>
        	</div><!--//media-body-->
   		 	</div><!--//media-->
		</div><!--//post-->

		    </div>
			<div class="post mb-5">
				    <div class="media">
					<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo get_template_directory_uri(); ?>/images/TheSynthRiderX.png" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1">The SynthRider X</h3>
						    
						    <div class="intro">Description: The SynthRider X is the ultimate streetwear sneaker for those who want a blend of style, performance, and cutting-edge technology. These shoes are equipped with an AI-powered "motion mapping" system that tracks your steps and analyzes your stride, optimizing the shoe’s response for both comfort and performance. The AI learns from your walking or running habits and adjusts the footbed to provide customized support throughout the day. The upper is a futuristic mix of smooth synthetic leather and woven graphene fibers, offering durability and flexibility. The bold, chrome-colored exterior is accentuated with accent LEDs that pulse in rhythm with your movement, creating a sleek and energetic vibe. The sole features energy-return technology to reduce foot fatigue, perfect for long days on the go.<br>
							The SynthRider X combines high-tech functionality with a bold design, making them the perfect fit for the next generation of sneakerheads who demand more from their footwear.<br><br>


						    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>

			    
				
		    </div>
	    </section>
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
            <p class="copyright">Empower/Elias Sinani</a></p>
		   
	    </footer>
    
    </div>
    
	<?php

	get_footer();
	?>