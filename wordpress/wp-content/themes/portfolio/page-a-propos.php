<?php get_header(); ?>
		<h1 id="maintitle">
			<a href="<?php bloginfo("wpurl"); ?>"><?php bloginfo("name"); ?></a>
		</h1>
		<?php if( have_posts() ) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<h3><?php _e("Posté par "); ?> <?php the_author(); ?> <?php _e("le"); ?> <?php echo get_the_date(); ?></h3>
				<div class="content"><?php the_content(); ?></div>
				<hr />
			<?php endwhile; ?>
		<?php endif; ?>
			
		

<p>
	Ceci est la page a propos
</p>	
<?php get_footer(); ?>