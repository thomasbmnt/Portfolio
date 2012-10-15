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
					<?php
						$page_id = 91;
						$page_data = get_page($page_id);
						

						echo $page_data->post_content; ?>
						<?php
						/* print_r($page_data); */
					?>
			</section>
			
			<section id="Derniere_realisations">
				<div class="conteneur">		
					<?php
						$page_id = 61;
						$page_data = get_page($page_id);
						
						
						
						?>
							<h2><?php echo $page_data->post_title; ?></h2>
							<h3>Date&nbsp;: <?php echo $page_data->post_modified; ?></h3>
							<p>
								<?php echo $image; ?>
								<?php echo $page_data->post_content; ?>
								<?php echo get_the_post_thumbnail($page_data->ID, 'large'); ?>
							</p>
						<?php
						/* print_r($page_data); */
					?>
				</div>
			</section>
			
			<section id="Creations">
				<div class="conteneur">
					<h2>Créations</h2>
					
					<ul id="liste_creations">
<!--
						<li>
							<a href="<?php bloginfo('template_directory'); ?>/images/creations/normal/insight.png" class="lightBox"><img src="<?php bloginfo('template_directory'); ?>/images/creations/small/insight.jpg" alt="Image du site de l'équipe de jeu CSS Insight" /></a>
						</li>
-->
						<?php
							$args = array('post_type' => 'travaux', 'posts_per_page' => 10);
							$loop = new WP_query($args);
							
							if($loop->have_posts()) :
								while($loop->have_posts()) :
									$loop->the_post();
									$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
									?>
										<li>
											<a href="<?php echo $large_image_url[0]; ?>" class="lightBox">
												<?php the_post_thumbnail(); ?>
											</a>
										</li>
									<?php
								endwhile;
							endif;
						?>
					</ul>
				</div>
			</section>
			
			<hr />
			
			<section id="Contact">
				<div class="conteneur">
					<h2>Formulaire de contact</h2>
					
					<form action="#" method="POST">
						<fieldset>
							<legend>Formulaire de contact</legend>
							
							<label for="nom">Nom</label>
							<input type="text" name="nom" id="nom" required="required" />
							
							<label for="prenom">Prénom</label>
							<input type="text" name="prenom" id="prenom" required="required" />
							
							<label for="email">Email</label>
							<input type="email" name="email" id="email" required="required" />
							
							<label for="message">Message</label>
							<textarea required="required" id="message" rows="5" cols="20"></textarea>
							
							<input type="submit" value="Envoyer" name="Envoyer" id="Envoyer" />
							<input type="reset" value="Effacer" name="Effacer" id="Effacer" />
						</fieldset>
					</form>
				</div>
			</section>

   <?php get_footer(); ?>