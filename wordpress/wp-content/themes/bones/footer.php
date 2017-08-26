			<footer id="footer">
				<div class="wrap">
					<div class="center">
						<span class="glyphicon glyphicon-menu-up seta-topo"></span>
					</div>
					<p class="m-all t-all d-all center">• Yannikson Pereira •  yannikson@gmail.com • </p>
					<p class="m-all t-all d-all center">• Intuitivamente desenvolvido com Wordpress e Nescau •</p>
				</div>
			</footer>
		</div>
		<!-- open/close -->
		<div class="overlay overlay-hugeinc">
			<button type="button" class="overlay-close">X</button>
			<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<?php wp_nav_menu(array( 'container' => false, 'container_class' => 'menu cf', 'menu' => __( 'The Main Menu', 'bonestheme' ), 'menu_class' => 'nav top-nav cf', 'theme_location' => 'main-nav', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0, 'fallback_cb' => '')); ?>
			</nav> 
		</div>

		<?php // all js scripts are loaded in library/bones.php ?>

		<!-- Menu FullScreenOverlay -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/fullscreenoverlay/js/classie.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/fullscreenoverlay/js/demo1.js"></script>
		
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
