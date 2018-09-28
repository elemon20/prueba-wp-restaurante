<?php get_header(); ?>

	<main>


		<section class="il-fonti_menu" id="antipastos">

			<div class="container">

				<ul class="list-unstyled">

					<?php
						$arg = array(
							'post_type'		 => 'antipastos',
							'posts_per_page' => 10,
						  	//'post_not_in'	 => array($post->ID),
							'paged'			 => $paged
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
					?>
					<li>
						<div class="title">
							<h2 class="parallax-move" data-parallax-content='{"shift": 30, "duration": 3}'><?php the_title(); ?></h2>
							<?php the_post_thumbnail('destacada', array('class' => 'il-fonti_menu__list_img img-fluid mb-3')); ?>
						</div>
						
						
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('antipasto1') ?></h4>
								<small><?php the_field('descripcion-antipasto1') ?></small>
								<div>			
								<?php $image = get_field('imagen-antipasto1') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-antipasto1') ?></h4>
							</div>

						</div>

						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('antipasto2') ?></h4>
								<small><?php the_field('descripcion-antipasto2') ?></small>
								<div>
								<?php $image = get_field('imagen-antipasto2') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-antipasto2') ?></h4>
							</div>
						</div>
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('antipasto3') ?></h4>
								<small><?php the_field('descripcion-antipasto3') ?></small>
								<div>
								<?php $image = get_field('imagen-antipasto3') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-antipasto3') ?></h4>
							</div>
						</div>
						
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('antipasto4') ?></h4>
								<small><?php the_field('descripcion-antipasto4') ?></small>
								<div>
									<?php $image = get_field('imagen-antipasto4') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>

							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-antipasto4') ?></h4>
							</div>
						</div>
					</li>

					 

				<?php } wp_reset_postdata();
				?>

					
				</ul>
			</div>
		</section>



		<section class="il-fonti_menu" id="salad">

			<div class="container">

				<ul class="list-unstyled">

					<?php
						$arg = array(
							'post_type'		 => 'ensaladas',
							'posts_per_page' => 10,
						  	//'post_not_in'	 => array($post->ID),
							'paged'			 => $paged
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
					?>
					<li>
						<div class="title">
							<h2 class="parallax-move" data-parallax-content='{"shift": 30, "duration": 3}'><?php the_title(); ?></h2>
							<?php the_post_thumbnail('destacada', array('class' => 'il-fonti_menu__list_img img-fluid mb-3')); ?>
						</div>
						
						
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('ensalada1') ?></h4>
								<small><?php the_field('descripcion-ensalada1') ?></small>
								<div>			
								<?php $image = get_field('imagen-ensalada1') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-ensalada1') ?></h4>
							</div>

						</div>

						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('ensalada2') ?></h4>
								<small><?php the_field('descripcion-ensalada2') ?></small>
								<div>
								<?php $image = get_field('imagen-ensalada2') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-ensalada2') ?></h4>
							</div>
						</div>
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('ensalada3') ?></h4>
								<small><?php the_field('descripcion-ensalada3') ?></small>
								<div>
								<?php $image = get_field('imagen-ensalada3') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
							</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-ensalada3') ?></h4>
							</div>
						</div>
						
						
					</li>

					 

				<?php } wp_reset_postdata();
				?>

					
				</ul>
			</div>
		</section>


		<section class="il-fonti_menu" id="soup">

			<div class="container">

				<ul class="list-unstyled">

					<?php
						$arg = array(
							'post_type'		 => 'sopas',
							'posts_per_page' => 10,
						  	//'post_not_in'	 => array($post->ID),
							'paged'			 => $paged
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
					?>
					<li>
						<div class="title">
							<h2 class="parallax-move" data-parallax-content='{"shift": 30, "duration": 3}'><?php the_title(); ?></h2>
							<?php the_post_thumbnail('destacada', array('class' => 'il-fonti_menu__list_img img-fluid mb-3')); ?>
						</div>
						
						
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('sopa1') ?></h4>
								<small><?php the_field('descripcion-sopa1') ?></small>
								<div>			
								<?php $image = get_field('imagen-sopa1') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-sopa1') ?></h4>
							</div>

						</div>

						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('sopa2') ?></h4>
								<small><?php the_field('descripcion-sopa2') ?></small>
								<div>
								<?php $image = get_field('imagen-sopa2') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-sopa2') ?></h4>
							</div>
						</div>
						
						</div>
					</li>

					 

				<?php } wp_reset_postdata();
				?>

					
				</ul>
			</div>
		</section>

		<section class="il-fonti_menu" id="pizza">

			<div class="container">

				<ul class="list-unstyled">

					<?php
						$arg = array(
							'post_type'		 => 'pizzas',
							'posts_per_page' => 10,
						  	//'post_not_in'	 => array($post->ID),
							'paged'			 => $paged
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
					?>
					<li>
						<div class="title">
							<h2 class="parallax-move" data-parallax-content='{"shift": 30, "duration": 3}'><?php the_title(); ?></h2>
							<?php the_post_thumbnail('destacada', array('class' => 'il-fonti_menu__list_img img-fluid mb-3')); ?>
						</div>
						
						
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('pizza1') ?></h4>
								<small><?php the_field('descripcion1') ?></small>
								<div>			
								<?php $image = get_field('imagen-pizza1') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-pizza1') ?></h4>
							</div>

						</div>

						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('pizza2') ?></h4>
								<small><?php the_field('descripcion2') ?></small>
								<div>
								<?php $image = get_field('imagen-pizza2') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-pizza2') ?></h4>
							</div>
						</div>
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('pizza3') ?></h4>
								<small><?php the_field('descripcion3') ?></small>
								<div>
								<?php $image = get_field('imagen-pizza3') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-pizza3') ?></h4>
							</div>
						</div>
						
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('pizza4') ?></h4>
								<small><?php the_field('descripcion4') ?></small>
								<div>
									<?php $image = get_field('imagen-pizza4') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>

							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-pizza4') ?></h4>
							</div>
						</div>
					</li>

					 

				<?php } wp_reset_postdata();
				?>

					
				</ul>
			</div>
		</section>

		<section class="il-fonti_menu" id="dessert">

			<div class="container">

				<ul class="list-unstyled">

					<?php
						$arg = array(
							'post_type'		 => 'postres',
							'posts_per_page' => 10,
						  	//'post_not_in'	 => array($post->ID),
							'paged'			 => $paged
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
					?>
					<li>
						<div class="title">
							<h2 class="parallax-move" data-parallax-content='{"shift": 30, "duration": 3}'><?php the_title(); ?></h2>
							<?php the_post_thumbnail('destacada', array('class' => 'il-fonti_menu__list_img img-fluid mb-3')); ?>
						</div>
						
						
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('postre1') ?></h4>
								<small><?php the_field('descripcion1') ?></small>
								<div>			
								<?php $image = get_field('imagen-postre1') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio1') ?></h4>
							</div>

						</div>

						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('postre2') ?></h4>
								<small><?php the_field('descripcion2') ?></small>
								<div>
								<?php $image = get_field('imagen-postre2') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio2') ?></h4>
							</div>
						</div>
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('postre3') ?></h4>
								<small><?php the_field('descripcion3') ?></small>
								<div>
								<?php $image = get_field('imagen-postre3') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio3') ?></h4>
							</div>
						</div>
						
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('postre4') ?></h4>
								<small><?php the_field('descripcion4') ?></small>
								<div>
									<?php $image = get_field('imagen-postre4') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>

							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio4') ?></h4>
							</div>
						</div>
					</li>

					 

				<?php } wp_reset_postdata();
				?>

					
				</ul>
			</div>
		</section>

		<section class="il-fonti_menu" id="infusions">

			<div class="container">

				<ul class="list-unstyled">

					<?php
						$arg = array(
							'post_type'		 => 'infusiones',
							'posts_per_page' => 10,
						  	//'post_not_in'	 => array($post->ID),
							'paged'			 => $paged
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
					?>
					<li>
						<div class="title">
							<h2 class="parallax-move" data-parallax-content='{"shift": 30, "duration": 3}'><?php the_title(); ?></h2>
						</div>
						<?php the_post_thumbnail('destacada', array('class' => 'il-fonti_menu__list_img img-fluid mb-3')); ?>
						
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('infusion') ?></h4>
								<div>			
								<?php $image = get_field('imagen-infusion') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio_infusion') ?></h4>
							</div>

						</div>

						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('espreso') ?></h4>
								<div>
								<?php $image = get_field('imagen-espreso') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio_espreso') ?></h4>
							</div>
						</div>
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('latte') ?></h4>
								<div>
								<?php $image = get_field('imagen-latte') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio_latte') ?></h4>
							</div>
						</div>
						
						<div class="row justify-content-between">
							
							<div class="col-6">

								<h4 class="il-fonti_menu__list mb-3"><?php the_field('moca') ?></h4>
								<div>
									<?php $image = get_field('imagen_moca') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">
								</div>
								
							</div>

							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio_moca') ?></h4>
							</div>
						</div>
					</li>

					 

				<?php } wp_reset_postdata();
				?>

					
				</ul>
			</div>
		</section>

		<section class="il-fonti_menu" id="drinks">

			<div class="container">

				<ul class="list-unstyled">

					<?php
						$arg = array(
							'post_type'		 => 'bebidas',
							'posts_per_page' => 10,
						  	'post_not_in'	 => array($post->ID),
							'paged'			 => $paged
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
					?>


					 <li>
                        <div class="title">
                            <h2 class="parallax-move" data-parallax-content='{"shift": 30, "duration": 3}'><?php the_title(); ?></h2>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-6">
                               <h4 class="il-fonti_menu__list mb-3"><?php the_field('agua') ?></h4>
								<?php the_post_thumbnail('destacada', array('class' => 'il-fonti_menu__list_img mb-3')); ?>
								<div>
								<?php $image = get_field('imagen-agua') ?>
								<img class="il-fonti_menu__list_img" src="<?php echo $image['sizes']['square'] ?>">

								</div>
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-agua') ?></h4>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-6">
                               <h4 class="il-fonti_menu__list mb-3"><?php the_field('bebida') ?></h4>
								<div>
								<?php $image = get_field('imagen-bebida') ?>
								<img class="il-fonti_menu__list_img" src="<?php  echo $image['sizes']['square'] ?>">
								</div>
							</div>
							<div class="col-4">
								<h4 class="mt-3"><?php the_field('precio-bebida') ?></h4>
                            </div>
                        </div>
                    </li>

				<?php } wp_reset_postdata();
				?>

					
				</ul>
			</div>
		</section> 

		




		
<?php get_footer(); ?>