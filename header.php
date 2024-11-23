<!DOCTYPE html>
<html lang="en"> 
<head>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OffLane">

    
    <img  href="C:\Users\Studenti\OffLane">
    
  
	<?php
    wp_head();
    ?>

</head> 

<body>
    
    <header class="header text-center">	    
	    
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
                        )
                    );
            ?>

			</div>
		</nav>
    </header>
    
    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php the_title() ?></h1>
		</header>
        

        
        

</body>


</html>