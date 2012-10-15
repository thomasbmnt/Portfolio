<?php get_header(); ?>
		
			<header id="top">
				<div class="conteneur">
					<h1><a href="index.html">Bienvenue sur le portfolio de Thomas Beaumont !</a></h1>
					
					<nav>
							<?php $defaults = array(
								'theme_location'  => '',
								'menu'            => '', 
								'container'       => 'ul', 
								'container_class' => 'group', 
								'container_id'    => 'nav_effect',
								'menu_class'      => 'group', 
								'menu_id'         => 'nav_effect',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							); ?>
							<?php wp_nav_menu( $defaults ); ?>
<!--
							<li class="current_page"><a href="#Accueil">Accueil</a></li>
							<li><a href="#Derniere_realisations">Présentation</a></li>
							<li><a href="#Creations">Créations</a></li>
							<li><a href="#Contact">Contact</a></li>
-->
					</nav>
				</div>
			</header>
			
			<section id="Accueil">
				<div class="conteneur">
					<?php
						$page_id = 91;
						$page_data = get_page($page_id);
						

						echo $page_data->post_content; ?>
						<?php
						/* print_r($page_data); */
					?>
				</div>
				<hr id="decorativeLine">
			</section>
			
			
			<section id="Derniere_realisations">
				<div class="conteneur">		
					<?php
						$page_id = 61;
						$page_data = get_page($page_id);
						$large_image_url = wp_get_attachment_image_src ( get_post_thumbnail_id ( $page_id ), 'large');
						
						
						?>
							<h2><?php echo $page_data->post_title; ?></h2>
							<h3>Date&nbsp;: <?php echo $page_data->post_modified; ?></h3>
							<p>
								<span class="thumbnail"><a href="<?php echo $large_image_url[0]; ?>" class="lightBox"><?php echo get_the_post_thumbnail($page_data->ID, "last_thumbnails"); ?></a></span>
								<?php echo $page_data->post_content; ?>
							</p>
						<?php
						/* print_r($page_data); */
					?>
				</div>
			</section>
			
   <?php get_footer(); ?>