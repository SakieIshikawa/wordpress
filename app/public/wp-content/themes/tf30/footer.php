<!-- footer-menu -->
<div id="footer-menu">
  <div class="inner">
    <?php if (is_home() || is_front_page()) : ?>
      <h1 class="footer-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1><!-- /header-logo -->
    <?php else : ?>
      <div class="footer-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div><!-- /header-logo -->
    <?php endif; ?>
    <div class="footer-sub"><?php bloginfo('description'); ?></div><!-- /header-sub -->

    <?php
    wp_nav_menu(
      //.footer-listを置き換えて、PC用メニューを動的に表示する
      array(
        'depth' => 1,
        'theme_location' => 'footer', //footerメニューの表示場所
        'container' => 'nav',
        'container_class' => 'footer-nav',
        'menu_class' => 'footer-list',
      )
    ); ?>

  </div><!-- /inner -->
</div><!-- /footer-menu -->



<!-- footer -->
<footer id="footer">
  <div class="inner">
    <div class="copy">&copy; daily-trial WordPress theme All rights reserved.</div><!-- /copy -->
    <div class="by">Presented by <a href="https://tokyofreelance.jp/" rel="noopener" target="_blank">My blog</a>
    </div><!-- /by -->

  </div><!-- /inner -->
</footer><!-- /footer -->

<div class="floating">
  <a href="#"><i class="fas fa-chevron-up"></i></a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/script.js"></script>
<?php wp_footer(); ?>
</body>

</html>
