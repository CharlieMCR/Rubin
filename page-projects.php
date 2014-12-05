<?php 
/*
	Template Name: Projects Page
*/
 ?>
<?php get_header(); ?>

<section class="row">
	<div class="col-md-8">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

		<?php endwhile; endif; ?>

	</div>
</section>

<?php get_template_part('content', 'project'); ?>
<?php get_footer(); ?>