<!-- header -->
<?php get_header(); ?>

<!-- pickup -->
<div id="pickup">
  <div class="inner">

    <div class="pickup-items">

      <a href="#" class="pickup-item">
        <div class="pickup-item-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/pickup1.png" alt="">
          <div class="pickup-item-tag">カテゴリ名</div>
        </div>
        <div class="pickup-item-body">
          <h2 class="pickup-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2>
        </div>
      </a><!-- /pickup-item -->

      <a href="#" class="pickup-item">
        <div class="pickup-item-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/pickup1.png" alt="">
          <div class="pickup-item-tag">カテゴリ名</div>
        </div><!-- /pickup-item-img -->
        <div class="pickup-item-body">
          <h2 class="pickup-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /pickup-item-title -->
        </div><!-- /pickup-item-body -->
      </a><!-- /pickup-item -->

      <a href="#" class="pickup-item">
        <div class="pickup-item-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/pickup1.png" alt="">
          <div class="pickup-item-tag">カテゴリ名</div><!-- /pickup-item-tag -->
        </div><!-- /pickup-item-img -->
        <div class="pickup-item-body">
          <h2 class="pickup-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /pickup-item-title -->
        </div><!-- /pickup-item-body -->
      </a><!-- /pickup-item -->

    </div><!-- /pickup-items -->

  </div><!-- /inner -->
</div><!-- /pickup -->


<!-- content -->
<div id="content">
  <div class="inner">

    <!-- primary -->
    <main id="primary">

      <?php
      //もし記事があれば entries以下を表示する
      if (have_posts()) : ?>

        <!-- entries -->
        <div class="entries">

          <?php while (have_posts()) :
            the_post(); ?>

            <!-- entry-item -->
            <a href="<?php the_permalink(); ?>" class="entry-item">
              <!-- もしアイキャッチ画像があればlargeサイズで表示、なければnoimg画像を表示 -->
              <div class="entry-item-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('large');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                }
                ?>
              </div>

              <!-- entry-item-body -->
              <div class="entry-item-body">
                <div class="entry-item-meta">
                  <!-- $categoryにget_the_category()取で得した値を代入。<div class="entry-item-tag">にカテゴリー１つ目の名前を表示 -->
                  <?php
                  $category = get_the_category();
                  if ($category[0]) {
                    echo '<div class="entry-item-tag">' . $category[0]->cat_name . '</div>';
                  }
                  ?>
                  <!-- 公開日時を表示 -->
                  <time class="entry-item-published" datetime="<?php the_time('d'); ?>"><?php the_time('Y/n/j'); ?></time>
                </div><!-- /entry-item-meta -->
                <h2 class="entry-item-title">
                  <?php the_title(); ?>
                </h2>
                <div class="entry-item-excerpt">
                  <?php the_excerpt(); ?>
                </div>
              </div><!-- /entry-item-body -->
            </a><!-- /entry-item -->
          <?php endwhile; ?>
        </div><!-- /entries -->
      <?php endif; ?>


      <!-- pagenation -->
      <!-- ページが1ページ以上あればページングを表示 -->
      <?php if (paginate_links()) : ?>
        <div class="pagenation">
          <?php echo
            paginate_links(
              array(
                'end_size' => 0,
                'mid_size'  => 2,
                'prev_next' => true,
                'prev_text' => '<i class="fas fa-angle-left"></i>',
                'next_text' => '<i class="fas fa-angle-right"></i>',
              )
            );
          ?>
        </div>
      <?php endif; ?>

    </main><!-- /primary -->

    <!-- secondary -->
    <?php get_sidebar(); ?>

  </div><!-- /inner -->
</div><!-- /content -->

<!-- footer-menu -->
<?php get_footer(); ?>
