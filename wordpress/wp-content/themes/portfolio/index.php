<?php get_header(); ?>
		<h1 id="maintitle">
			<a href="<?php bloginfo("wpurl"); ?>"><?php bloginfo("name"); ?></a>
		</h1>
		
		<?php wp_nav_menu(array('menu' => 'Header Menu')); ?>
		
		<?php if( have_posts() ) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<h3><?php _e("Posté par "); ?> <?php the_author(); ?> <?php _e("le"); ?> <?php echo get_the_date(); ?></h3>
				<div class="content"><?php the_content(); ?></div>
				<hr />
				<!-- Affiche les termes de la taxonomie -->
				<?php the_terms($post->ID, "techniques"); ?>
			<?php endwhile; ?>
		<?php endif; ?>
			
		
		<p>
			Je suis dans index
		</p>
		
		<?php
			get_sidebar("primary");
			get_sidebar("secondary");
		?>
<?php get_footer(); ?>