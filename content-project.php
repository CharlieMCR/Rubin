<?php 

	$num_posts = (is_front_page()) ? 4 : -1;

	$args = array(
		'post_type' => 'project',
		'posts_per_page' => $num_posts
	);

	$query = new WP_Query($args);
 ?>

<section class="row">

	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

	<div class="col-sm-6 col-md-4 col-lg-3 project">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
		<h1><?php the_title(); ?></h1>
	</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>
</section>