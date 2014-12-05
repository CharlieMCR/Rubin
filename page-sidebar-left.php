<?php 
/*
	Template Name: Left Sidebar
*/ 
?>
<?php get_header(); ?>

<section class="row">
	<!-- Primary Column -->
	<div class="col-md-8 col-md-push-4">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>

		<?php endwhile; else : ?>

			<p><?php _e( 'Sorry, no pages found.' ); ?></p>

		<?php endif; ?>

	</div>
	<!-- Secondary Column -->
	<div class="col-md-4 col-md-pull-8">
		<h2>Sidebar</h2>
	</div>
</section>

<?php get_footer(); ?>