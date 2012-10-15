	<footer>
		<div class="conteneur">
			<aside id="reseauxSociaux">
				<h3>Réseaux sociaux</h3>
				<?php
					$args = array('post_type' => 'Sociaux');
					$loop = new WP_query($args);
					
					while($loop->have_posts()) :
						$loop->the_post();
						
						?>
						<a href="<?php echo get_post_meta($loop->post->ID, 'URL')[0]; ?>"><?php the_post_thumbnail(); ?> <?php the_title(); ?></a><br />
						<?php
					endwhile;
				?>
			</aside>
			<div id="derniersArticles">
				<h3>Derniers articles</h3>
				
				<?php
					query_posts( 'posts_per_page=5' );
					if( have_posts() ) :
						while( have_posts() ) : the_post();
							?>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<?php
						endwhile;
					endif;
				?>
			</div>
			<aside id="lecturesEnCours">
				<h3>Lectures en cours</h3>
				<?php
					$args = array('post_type' => 'Books');
					$loop = new WP_query($args);
					
					while($loop->have_posts()) :
						$loop->the_post();
						
						?>
						<a href="<?php echo get_post_meta($loop->post->ID, 'URL')[0]; ?>"><?php the_post_thumbnail(); ?> <?php the_title(); ?></a><br />
						<?php
					endwhile;
				?>				
			</aside>
		</div>
		<div class="clear"></div>
	</footer>
	
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.8.2.js"></script>
    <script src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery.color-RGBa-patch.js'></script>
    <script src='<?php bloginfo('stylesheet_directory'); ?>/js/example.js'></script>
	</body>
</html>