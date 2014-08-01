<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>

    <div class="navbar-container">

      <nav class="navbar" role="navigation">
        <?php
          if (has_nav_menu('footer_navigation')) :
            wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>

    </div>

  </div>
</footer>

<?php wp_footer(); ?>
