<?php get_header(); ?>

<section class="row" >
	<div <?php post_class('col-md-8'); ?>>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>

		<?php endwhile; else : ?>

			<p><?php _e( 'Sorry, no pages found.' ); ?></p>

		<?php endif; ?>

	</div>
</section>

<?php get_footer(); ?>