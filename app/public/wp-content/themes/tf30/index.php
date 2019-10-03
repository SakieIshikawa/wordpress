<!-- header -->
<?php get_header(); ?>

<!-- pickup -->
<div id="pickup">
  <div class="inner">

    <div class="pickup-items">

      <a href="#" class="pickup-item">
        <div class="pickup-item-img">
          <img src="img/pickup1.png" alt="">
          <div class="pickup-item-tag">カテゴリ名</div><!-- /pickup-item-tag -->
        </div><!-- /pickup-item-img -->
        <div class="pickup-item-body">
          <h2 class="pickup-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /pickup-item-title -->
        </div><!-- /pickup-item-body -->
      </a><!-- /pickup-item -->

      <a href="#" class="pickup-item">
        <div class="pickup-item-img">
          <img src="img/pickup2.png" alt="">
          <div class="pickup-item-tag">カテゴリ名</div><!-- /pickup-item-tag -->
        </div><!-- /pickup-item-img -->
        <div class="pickup-item-body">
          <h2 class="pickup-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /pickup-item-title -->
        </div><!-- /pickup-item-body -->
      </a><!-- /pickup-item -->

      <a href="#" class="pickup-item">
        <div class="pickup-item-img">
          <img src="img/pickup3.png" alt="">
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
            <a href="<?php the_permalink(); //記事のリンクを表示
                      ?>" class="entry-item">
              <!-- entry-item-img -->
              <div class="entry-item-img">
                <img src="img/entry1.png" alt="">
              </div><!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="entry-item-body">
                <div class="entry-item-meta">
                  <div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
                  <time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
                </div><!-- /entry-item-meta -->
                <h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
                <div class="entry-item-excerpt">
                  <p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
                </div><!-- /entry-item-excerpt -->
              </div><!-- /entry-item-body -->
            </a><!-- /entry-item -->

          <?php  //phpのwhile文の閉めタグ
        endwhile;
        ?>
        </div><!-- /entries -->

      <?php  //phpのif文の閉めタグ
    endif;
    ?>

      <!-- pagenation -->
      <div class="pagenation">
        <span class="page-numbers current">1</span>
        <a class="page-numbers" href="#">2</a>
        <a class="page-numbers" href="#">3</a>
        <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
      </div><!-- /pagenation -->

    </main><!-- /primary -->

    <!-- secondary -->
    <?php get_sidebar(); ?>

  </div><!-- /inner -->
</div><!-- /content -->

<!-- footer-menu -->
<?php get_footer(); ?>
