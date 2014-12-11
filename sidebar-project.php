<?php if( !dynamic_sidebar( 'project' ) ): ?>
	<h2>Sidebar Setup</h2>
	<p>Please add widgets via the admin area.</p>
<?php endif; ?>
<?php //the_field('image'); ?>

<?php //echo do_shortcode("[huge_it_gallery id='2']"); ?>
<?php the_post(); ?>
<?php if(get_field('images')): ?>
	<div id="slider">
		<?php while(the_repeater_field('images')): ?>
			<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>
			<?php $thumb = wp_get_attachment_image_src(get_sub_field('image'), 'thumbnail'); ?>
	    	<img src="<?php echo $image[0]; ?>" alt="<?php  the_sub_field('title');?>" rel="<?php echo $thumb[0]; ?>" />
	    <?php endwhile; ?>
	</div>
	<?php endif; ?>