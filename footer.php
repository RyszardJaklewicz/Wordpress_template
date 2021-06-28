<?php
/**
 * Author: Ryszard Jaklewicz
 * Plik Stopiki szablonu Wordpress 
 */
?>

</div><!-- .site-content -->
<footer class="site-footer">
  <div class="site-footer__inner container">
    <nav class="navigation navigation--secondary">
	<!-- Wstawiamy menu o nazwie footer-menu -->
      <?php wp_nav_menu( array(
        'theme_location' => 'footer-menu',
      ) ); ?>
    </nav>
    <div class="site-info"><span>Theme: Ryszard Jaklewicz</span></div>
  </div>
</footer>
</div><!-- .site -->
<?php wp_footer(); ?>
</body>
</html>