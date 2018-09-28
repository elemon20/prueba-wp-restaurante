<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
	  <meta charset="<?php bloginfo('charset') ?>">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title><?php bloginfo('name'); ?></title>
      
	  <?php get_template_part('_includes/iOS', 'icons') ?>
	  <?php wp_head(); ?>
	</head>
<body>

	<header class="section-intro jumbotron">
        <div class="section-pixel"></div>
        <div class="container-fluid">

            <!-- Just Image-->

            <div class="content-wrap col-sm">
                <img class="title parallax-move" data-parallax-content='{"shift": 40, "duration": 3}' src="<?php echo get_theme_file_uri('/assets/img/marca/logo.png'); ?>" alt="logo">
            </div>

        </div>

        <!-- Navbar -->

        <nav class="ac_content navbar navbar-expand-lg">

            <!--burger-->

            <button class="navbar-toggler btn btn-link" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                
            <span class="navbar-toggler-icon"><svg xmlns="<?php the_permalink('http://www.w3.org/2000/svg'); ?>" viewBox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path></svg></span>
                
            </button>
            
            <div class="collapse navbar-collapse justify-content-center ac_menu" id="navbarTogglerDemo02">
                
                    <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
                            <?php wp_nav_menu( array( 
                                'theme_location'    => 'header-menu',
                                'container_id'      => 'navbarTogglerDemo02',
                                'container_class'   => 'collapse navbar-collapse justify-content-center ac_menu',
                                'menu_class'        => 'nav navbar-nav navbar__navigation',
                                //'items_wrap'        => '<ul id="navbarTogglerDemo02">%3$s</ul>'
                                
                                )
                            ); ?>
                    <?php } ?>
            </div>


            

           <!--
            <div class="collapse navbar-collapse justify-content-center ac_menu" id="navbarTogglerDemo02">
           
            
         

            


              <ul class="nav navbar-nav navbar__navigation">

                    <li class="nav-item active">
                        <a class="nav-link" href="#antipastos">Antipastos<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#salad">Ensaladas<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#soup">Sopas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#traditional-pizza">Pizza Tradicional</a>
                    </li>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#pizza">Pizzas</a>
                    </li>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#dessert">Postres</a>
                    </li>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#infusions">Infusiones</a>
                    </li>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#drinks">Bebidas</a>
                    </li>
                </ul>
            </div>--> <!--End items--> 


            
        </nav><!-- end ac_content -->
    </header>