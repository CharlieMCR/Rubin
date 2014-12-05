<footer>
         
    <p>Copyright &copy;<?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>

</footer>


<nav class="group nav" id="primary_nav">

	<?php 

	$defaults = array(
		'container' => false,
		'theme_location' => 'primary-menu',
		'menu_class' => 'nav navbar-nav'
	);

	wp_nav_menu($defaults);


	?>

</nav><!--end primary_nav-->
</div><!--end wrapper-->
<?php wp_footer(); ?>
</body>
</html>