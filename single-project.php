<?php get_header(); ?>

<section class="row">
		<!-- Primary Column -->
		<div class="col-md-8 col-md-push-4">

			<?php //get_sidebar('project'); ?>

			<div id="image-slider">
				<?php the_field('image'); ?>
			</div>

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
</section>

<?php get_footer(); ?>