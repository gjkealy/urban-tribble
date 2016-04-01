<footer class="footer-extended">
	<?php if ( is_front_page() ) : ?>
		<nav class="nav-footer" role="navigation">
	      <?php
	      if (has_nav_menu('footer_navigation')) :
	        wp_nav_menu(['theme_location' => 'footer_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav nav-pills nav-justified']);
	      endif;
	      ?>
	    </nav>
	<?php else : ?>
		<div class="footer-extended-content row">
			<div class="col-md-6">
				<?php dynamic_sidebar('sidebar-footer-top-left'); ?>
			</div>
			<div class="col-md-6">
				<?php dynamic_sidebar('sidebar-footer-top-right'); ?>
			</div>
		</div>
	<?php endif; ?>
</footer>

<footer class="content-info">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer-bottom'); ?>
  </div>
</footer>
