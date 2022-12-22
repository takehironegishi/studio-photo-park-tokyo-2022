<?php if ( !is_page(array(1100,2710)) && !is_front_page() && !is_home()) : ?>
<section id="campaign" class="js-fadeIn">
          <h2 class="bodoni">CAMPAIGN</h2>
          <h3 class="yonaga">フェア・キャンペーン</h3>
          <ul class="fair-ul">
              <?php
$args = array(
  'post_type' => 'fair_campaign',// 投稿タイプを指定
  'posts_per_page' => 4,// 表示する記事数
);
$news_query = new WP_Query( $args );
if ( $news_query->have_posts() ): 
  while ( $news_query->have_posts() ): 
    $news_query->the_post(); 
?>

                 <?php if( get_field('バナー') ): ?>
                  <li class="fair-li js-fadeIn"><a href="<?php the_field('リンク'); ?>"><img src="<?php the_field('バナー'); ?>" /></a></li>

                  <?php endif; ?>
                                   
                  <?php endwhile;
                  endif;
                  wp_reset_postdata();
                  ?>
              
            </ul>
        </section>

  <?php endif; ?>
 <footer>
 <section id="company" class="js-fadeIn">
        <h2 class="yonaga">Best-Anniversary</h2>
        <p class="description yonaga">
          東京証券取引所 プライム市場上場の<br>
ツカダ・グローバルホールディングのグループ企業が運営しています。
        </p>
        <ul>
          <li><a href="https://www.best-anniversary.co.jp/" target="_new">事業者概要</a></li>
          <li><a href="https://www.tsukada-global.holdings/policy.html" target="_new">プライバシーポリシー</a></li>
          <li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lcle-lfrelc-a0b458e62a6375e358736776a0746305&_ga=2.202586130.245747070.1670398662-1210690165.1669594530&_gl=1*we0zyp*_ga*MTIxMDY5MDE2NS4xNjY5NTk0NTMw*_ga_5XPTCLHFTE*MTY3MDQ4NjY4MS4xMy4xLjE2NzA0ODY4NzguNjAuMC4w*_ga_RC50ZS5C51*MTY3MDQ4NjY4MS4xMi4xLjE2NzA0ODcwOTAuNjAuMC4w" target="_new">お問い合わせ</a></li>
        </ul>
        <div class="sns-link">
          <a href="https://www.instagram.com/studio_photopark/" target="_new">
            <p class="yonaga">OFFICIAL SNS</p>
            <img src="<?php bloginfo('template_directory'); ?>/asset/image/plan/company/sns-logo.webp" alt="instagram icon" />
          </a>
        </div>
        <p class="notice yonaga">
          本サイト内の写真・テキストなど全てのコンテンツの<br />
          無断引用・無断転載を禁じます。
        </p>
        <p class="copyright yonaga">
          Copyright<small> © Best-Anniversary Inc. All Rights Reserved.</small>
        </p>
      </section>
        </footer>
        </main>
<div class="fixed_bottom only-sp">
  <div class="fixed_bottom__inner">
    <ul class="fixed_ul">
        <li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lcle-lfreld-71bd003a3704fa19738f3d960f6fde29" target="_new">無料相談予約</a></li>
         <li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lcle-lfrela-b01b13a64c0688e14f78e88d9896f777" target="_new">撮影予約</a></li>
         <li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lcle-lfrelc-a0b458e62a6375e358736776a0746305" target="_new">お問い合わせ</a></li>
    </ul>
  </div>
</div>
      

    <!-- JavaScript -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="<?php bloginfo('template_directory'); ?>/asset/js/bgswitcher.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/asset/js/lightbox.js"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> <!-- TODO: ←の行を追加 -->
    <script src="<?php bloginfo('template_directory'); ?>/asset/js/lightbox.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/asset/js/spotlight.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/asset/js/main.js"></script>

    

<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<script src="<?php bloginfo('template_directory'); ?>/lib/js/picker.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/js/picker.date.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/js/picker.time.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/js/legacy.js"></script>
<!-- 日本語化対応 -->
<script src="<?php bloginfo('template_directory'); ?>/lib/js/ja_JP.js"></script>

<script>
jQuery(function(){
//デートピッカー用スクリプト
$(".datepicker").pickadate({
format: "yyyy年mm月dd日",
min: 1,
max: 90,
disable: [2,3] //除外する曜日を指定
});
    });
    </script>


<?php wp_footer(); ?>


    </body>
</html>