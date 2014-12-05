<?php get_header(); ?>

<section class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Primary Column -->
		<div class="col-md-8 col-md-push-4">

			<?php the_field('image'); ?>

		</div>
		<!-- Secondary Column -->
		<div class="col-md-4 col-md-pull-8">

			<h1><?php the_title(); ?></h1>
			<p><?php the_field('description'); ?></p>

			<p>
				<?php previous_post_link('%link', '<'); ?>
				<?php next_post_link('%link', '>'); ?>
			</p>

		</div>
	<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>