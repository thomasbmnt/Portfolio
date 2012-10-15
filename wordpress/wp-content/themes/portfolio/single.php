<!-- single.php -> Page dédier pour afficher un article isolé -->
<?php get_header(); ?>
		<h1 id="maintitle">
			<a href="<?php bloginfo("wpurl"); ?>"><?php bloginfo("name"); ?></a>
		</h1>
		<?php if( have_posts() ) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<article <?php post_class(); ?>>
					<h2><?php the_title(); ?></h2>
					<h3><?php _e("Posté par "); ?> <?php the_author(); ?> <?php _e("le"); ?> <?php echo get_the_date(); ?></h3>
					<div><?php the_post_thumbnail(); ?></div>
					<div class="content"><?php the_content(); ?></div>
					<hr />
				</article>
			<?php endwhile; ?>
			
			<?php comments_template(); ?>
		<?php endif; ?>
			

<p>
	Je suis dans single
</p>
<?php get_footer(); ?>