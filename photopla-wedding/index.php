
<?php get_header(); ?>
<style type="text/css">
  header{
       position: fixed;
    z-index: 10000;
    width: 100%;
    top: 0;
    display: none;
    padding: 5px 25px;
  }
  .flex-between {
    display: none;
     justify-content: inherit; 
}

    .openbtn {
    position: absolute;
    cursor: pointer;
    width: 50px;
    height: 50px;
    z-index: 3;
    top: 0;
    right: 1px;
}

@media screen and (min-width: 769px){
  .header_menu {
    display: flex;
    align-items: center;
    column-gap: 50px;
    margin-right: 32px;
    position: absolute;
    top: 10px;
    right: 6%;
}

}

</style>
      <main id="luxy">
        <section id="newtop" class="home">
          <p class="newtop-logo"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/top/toplogo.png"></p>
          <div class="swiper-container topslider">
              <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/top/topkv.jpg"></div>
                  <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/top/topkv02.jpg"></div>
                  <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/top/topkv03.jpg"></div>
                  <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/top/topkv04.jpg"></div>
              </div>
          </div>
          
          <div class="scrolldown1"><span>scroll</span></div>
          <p class="nennmatu">【ご案内】12/26(月)〜1/3(火)は年末年始休業<br>1/4(水)より通常営業いたします</p>
          <style type="text/css">
            .nennmatu{
              text-align: center;
              line-height: 1.5em;
              color: #999;
              padding-top: 3%;
            }
          </style>
        </section>
        
            

        <?php if ( !is_page(array(1100,2710)) ) : ?>
<section id="top-campaign" class="mt-small js-fadeIn">
          <h2 class="yumin">CAMPAIGN</h2>
          <h3 class="yugo">期間限定キャンペーン</h3>
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

        <section id="top-studio">
          <h2 class="yumin">STUDIO</h2>
          <p class="yugo">クリエイティブスタジオ</p>
          <h3 class="top-studio-head3"><span><b>35</b>のスタジオセット</span>で撮り放題</h3>
          <p class="top-studio-txt">最大90分間、背景を変更してウェディングフォト撮り放題！<br>
　洋装・和装が映える「クリエイティブスタジオ」で<br>
　おふたりらしいバリエーション豊かな撮影が叶います。</p>
          <div class="swiper-outcontainer1">
          <div class="swiper-container slider1">
              <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/studio/studio-img01.png"></div>
                  <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/studio/studio-img02.png"></div>
                  <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/studio/studio-img03.png"></div>
                  <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/studio/studio-img04.png"></div>
                  <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/studio/studio-img05.png"></div>
                  <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/studio/studio-img06.png"></div>
              </div>
            </div>
              <div class="swiper-pagination1"></div>
            
          </div>

          <a href="https://photopla.jp/wedding/studio-photo-park-tokyo/studio/" class="cvbt-more">VIEW MORE STUDIO</a>
        </section>

        <section id="top-plan">
          <h2 class="yumin">PLAN</h2>
          <p class="yugo">プラン</p>
          <h3 class="top-studio-head3"><span>19,800円</span>からの安心プライス</h3>
          <p class="top-studio-txt--bold"><span>ご家族</span>との撮影も<br>全プラン<span>追加料金なし</span>で承ります</p>

          <!-- プランボックス01 -->
          <div class="plan-box">
            <h4 class="plan-box-head4">スタジオで「シンプル」に撮影するなら</h4>
            <p class="plan-box-txt">衣裳・ヘアメイク・データなど<br>必要なものをすべて含んだお得なプラン</p>
            <ul class="plan-box-ul">
              <li class="plan-box-li"><a href="https://photopla.jp/wedding/studio-photo-park-tokyo/plan/#western">
                <p class="plan-box-li-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/plan/plan-box-li-img01.png"></p>
                <dl class="plan-box-li-dl">
                  <dt class="plan-box-li-dt afm">洋装１着プラン</dt>
                  <dd class="plan-box-li-dd">19,800円~</dd>
                </dl></a>
              </li>
              <li class="plan-box-li"><a href="https://photopla.jp/wedding/studio-photo-park-tokyo/plan/#japanese">
                <p class="plan-box-li-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/plan/plan-box-li-img02.png"></p>
                <dl class="plan-box-li-dl">
                  <dt class="plan-box-li-dt afm">和装１着プラン</dt>
                  <dd class="plan-box-li-dd">29,800円~</dd>
                </dl></a>
              </li>
            </ul>
          </div>
          <!-- プランボックス02 -->
          <div class="plan-box">
            <h4 class="plan-box-head4">「衣裳選び放題＆撮り放題」こだわり撮影が叶う</h4>
            <h5 class="plan-box-head5">先着毎月20組様限定</h5>
            <p class="plan-box-txt">洋装・和装どちらでも料金を気にせずに<br>お気に入りの１着をお選びいただけます</p>
            <ul class="plan-box-ul">
              <li class="plan-box-li"><a href="https://photopla.jp/wedding/studio-photo-park-tokyo/plan/#fortune1">
                <p class="plan-box-li-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/plan/plan-box-li-img03.png"></p>
                <dl class="plan-box-li-dl">
                  <dt class="plan-box-li-dt afm">運命の１着プラン</dt>
                  <dd class="plan-box-li-dd">99,000円</dd>
                </dl></a>
              </li>
              <li class="plan-box-li"><a href="https://photopla.jp/wedding/studio-photo-park-tokyo/plan/#fortune2">
                <p class="plan-box-li-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/plan/plan-box-li-img04.png"></p>
                <dl class="plan-box-li-dl">
                  <dt class="plan-box-li-dt afm">運命の2着プラン</dt>
                  <dd class="plan-box-li-dd">130,000円</dd>
                </dl></a>
              </li>
            </ul>
          </div>

          <!-- プランボックス03 -->
          <div class="plan-box">
            <h4 class="plan-box-head4">本格チャペル・憧れロケーション撮影なら</h4>
            <p class="plan-box-txt">映画のワンシーンのようなドラマチックな撮影が叶う</p>
            <ul class="plan-box-ul">
              <li class="plan-box-li"><a href="https://photopla.jp/wedding/studio-photo-park-tokyo/cathedral-lp/">
                <p class="plan-box-li-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/plan/plan-box-li-img05.png"></p>
                <dl class="plan-box-li-dl">
                  <dt class="plan-box-li-dt afm">大聖堂フォト</dt>
                  <dd class="plan-box-li-dd">99,000円</dd>
                </dl></a>
              </li>
              <li class="plan-box-li"><a href="https://photopla.jp/wedding/studio-photo-park-tokyo/location-lp/">
                <p class="plan-box-li-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/plan/plan-box-li-img06.png"></p>
                <dl class="plan-box-li-dl">
                  <dt class="plan-box-li-dt afm">ロケーションフォト</dt>
                  <dd class="plan-box-li-dd">132,000円</dd>
                </dl></a>
              </li>
            </ul>
          </div>

        </section>

        <section id="top-collection">
          <h2 class="yumin">COLLECTION</h2>
          <p class="yugo">衣裳</p>
          <h3 class="top-studio-head3"><span><b>100</b>種類以上</span>の豊富な衣裳＆<span>持ち込み無料</span></h3>
          <p class="top-studio-txt">ウェディング本番でも使用される品質の良いドレス・白無垢<br>
　色打掛・タキシードを取り揃え。衣裳お持ち込み撮影も承ります
         </p>
          <div class="swiper-outcontainer2">
            <div class="swiper-container slider2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/collection/collection-img01.png"></div>
                    <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/collection/collection-img02.png"></div>
                    <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/collection/collection-img03.png"></div>
                    <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/collection/collection-img04.png"></div>
                    <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/collection/collection-img05.png"></div>
                    <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/collection/collection-img06.png"></div>
                </div>
            </div>
              <div class="swiper-pagination2"></div>
          </div>
        </section>

        <section id="top-beauty">
          <h2 class="yumin">BEAUTY</h2>
          <p class="yugo">レタッチ＆美容</p>
          <h3 class="top-studio-head3"><span>”<b>理想</b>”を叶える</span>レタッチ技術</h3>
          <p class="top-studio-txt">
             フォトレタッチ専門のスタッフが在籍<br>
確かな技術を持ったスタッフがおふたりの写真を丁寧にレタッチ<br>
プロの技でお写真をより美しく仕上げます
          </p>

          <p class="top-beauty-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/beauty/beauty-img01.png"></p>
          <p class="top-beauty-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/beauty/beauty-img02.png"></p>

          <h3 class="top-studio-head3"><span><b>美しく</b>魅せる</span>ヘア＆メイク</h3>
          <p class="top-studio-txt3">プロフェッショナルが、あなたの美しさを<br>引き出し理想のスタイルを叶えます。<br>
マタニティの花嫁様やアトピーの方も安心して使用できる<br>“ハリウッドメイク“のお取り扱いもございます</p>
          <p class="top-beauty-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/beauty/beauty-img03.png"></p>
        </section>

        <section id="top-experience">
          <h2 class="yumin">EXPERIENCE</h2>
          <p class="yugo">撮影体験</p>
          <h3 class="top-studio-head3">らしさを叶える<span>「<b>体験型</b>」</span>撮影プロデュース</h3>
          <p class="top-studio-txt"> 結婚式のプロ集団が叶える「本物の結婚写真」<br>
          数多くの結婚式をプロデュースしてきたプロフェッショナルたちが<br>
          おふたりのご希望を一つひとつ実現するべく<br>
          ワンチームとなって世界に１枚だけの写真を創り上げます</p>

          
            <ul class="tab-group">
              <li class="tab"><a class="thumb-link" href="javascript:void(0);" onclick="slideThumb(1)">Photo planner</a></li>
              <li class="tab "><a class="thumb-link" href="javascript:void(0);" onclick="slideThumb(2)">Flower coordinator</a></li>
              <li class="tab"><a class="thumb-link one" href="javascript:void(0);" onclick="slideThumb(3)">Hair & Make up</a></li>
              <li class="tab"><a class="thumb-link one" href="javascript:void(0);" onclick="slideThumb(4)">Photographer</a></li>
            </ul>
            
            <!--タブを切り替えて表示するコンテンツ-->

                <div class="swiper-outcontainer3">
                <div class="swiper-container slider3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/experience/experience-img01.png"></div>
                        <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/experience/experience-img05.png"></div>
                        <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/experience/experience-img09.png"></div>
                        <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/experience/experience-img13.png"></div>
                    </div>
                    </div>
                    
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination3"></div>
                </div>


        </section>

        <section id="top-gallery">
          <h2 class="yumin">PHOTO GALLERY</h2>
          <p class="yugo">フォトギャラリー</p>

          <ul class="top-gallery-ul">
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img10.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img10.jpg"></a>
                </a>
            </li>
           <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img11.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img11.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img12.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img12.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img13.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img13.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img14.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img14.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img15.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img15.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img16.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img16.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img17.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img17.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img18.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img18.jpg"></a>
                </a>
            </li>
          </ul>

          <dl id="acMenu">
          <dt>VIEW MORE</dt>
          <dd>
            <ul class="top-gallery-ul">
              <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img01.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img01.jpg"></a>
                </a>
            </li>
           <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img02.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img02.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img03.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img03.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img04.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img04.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img05.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img05.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img06.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img06.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img07.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img07.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img08.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img08.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img09.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img09.jpg"></a>
                </a>
            </li>
            
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img19.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img19.jpg"></a>
                </a>
            </li>
           <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img20.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img20.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img21.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img21.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img22.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img22.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img23.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img23.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img24.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img24.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img25.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img25.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img26.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img26.jpg"></a>
                </a>
            </li>
            <li class="top-gallery-li">
              <a href="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img27.jpg" data-lightbox="abc">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/gallery/gallery-img27.jpg"></a>
                </a>
            </li>
          </ul>
          </dd>
          </dl>
        </section>

        <section id="top-voice">
          <h2 class="yumin">VOICE</h2>
          <p class="yugo">お客様の声</p>
          <!-- お客様の声BOX -->
              <div class="top-voice-box">
                <p class="top-voice-box-review"> <span>★★★★★</span>5.0</p>
                <h3 class="top-voice-box-head3">迅速な対応とプロの仕事に感銘を受けました！</h3>
                <p class="top-voice-box-txt">準備段階からメールやお電話の対応が迅速でとても感謝しております。撮影当日はカメラマンさん、ヘアメイクさん、着付けの方皆様プロフェッショナルなお仕事をされてとても感銘を受けました。撮影に慣れていないのですが終始リラックスした楽しい雰囲気を作ってくださり、とても楽しく思い出に残る時間となりました。本当にありがとうございました。</p>
                <p class="top-voice-box-info">女性/撮影日 2022.11.30/和装・洋装/スタジオ</p>
              </div>

              <!-- お客様の声BOX -->
              <div class="top-voice-box">
                <p class="top-voice-box-review"> <span>★★★★★</span>5.0</p>
                <h3 class="top-voice-box-head3">またリピートさせていただきたいです！</h3>
                <p class="top-voice-box-txt">撮影中も準備中も盛り上げてくださり、安心してお任せできました。大変たのしい時間でした。ヘアメイクも今っぽい雰囲気をご理解いただいていたので、とてもスムーズでした。</p>
                <p class="top-voice-box-info">女性/撮影日 2022.12.2/和装・洋装/スタジオ</p>
              </div>

          <!-- お客様の声BOX -->
          <div class="top-voice-box">
            <p class="top-voice-box-review"> <span>★★★★★</span>5.0</p>
            <h3 class="top-voice-box-head3">最高の１日　いい思い出になりました！</h3>
            <p class="top-voice-box-txt">普段あまり写真を撮らないので、うまく撮れるか心配でしたがス
            タッフさんが全部指示をしてくださり助かりました。ヘアメイク
            もイメージ以上に良くしてくれてすごく良かったです。ありがと
            うございました！！</p>
            <p class="top-voice-box-info">女性/撮影日 2022.10.28/和装/スタジオ</p>
          </div>

          <dl id="acMenu2">
          <dt>VIEW MORE</dt>
          <dd>

              <!-- お客様の声BOX -->
              <div class="top-voice-box">
                <p class="top-voice-box-review"> <span>★★★★★</span>5.0</p>
                <h3 class="top-voice-box-head3">アドバイスのおかげで自分たちらしい自然な写真に</h3>
                <p class="top-voice-box-txt">はじめは緊張していましたが暖かいお声かけのおかげで自然な笑顔で撮影できました。帰り道に「すごく楽しかったね」と2人で話しながら充実感を感じていました。当日お世話になったスタッフの方々、本当にありがとうございました。</p>
                <p class="top-voice-box-info">女性/撮影日 2022.11.2/和装・洋装/スタジオ</p>
              </div>

              <!-- お客様の声BOX -->
              <div class="top-voice-box">
                <p class="top-voice-box-review"> <span>★★★★★</span>5.0</p>
                <h3 class="top-voice-box-head3">沢山のシーンを撮ってもらえて嬉しかったです</h3>
                <p class="top-voice-box-txt">とても楽しい撮影でした！ヘア・メイクも自分に合っていてとて
                も良い仕上がりでした！</p>
                <p class="top-voice-box-info">女性/撮影日 2022.10.16/和装・洋装/スタジオ</p>
              </div>

              <!-- お客様の声BOX -->
              <div class="top-voice-box">
                <p class="top-voice-box-review"> <span>★★★★★</span>5.0</p>
                <h3 class="top-voice-box-head3">要望以上の仕上がり！</h3>
                <p class="top-voice-box-txt">とても素敵な写真をたくさん撮っていただき楽しかったです。ありがとうございました！</p>
                <p class="top-voice-box-info">女性/撮影日 2022.11.12/洋装/スタジオ</p>
              </div>
          </dd>
          </dl>
        </section>

        <section id="top-flow">
          <h2 class="yumin">FLOW</h2>
          <p class="yugo">撮影までの流れ</p>
          <h3 class="top-studio-head3"><span><b>簡単３ステップ</b></span>で撮影が可能<br>こだわり派の方はお打ち合わせもOK</h3>

          <div class="flowbox">
            <h4 class="flowbox-head4"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/flow/flow-num01.png"></a></h4>
            <dl class="flowbox-dl">
              <dt class="flowbox-dt">相談予約をする</dt>
              <dd class="flowbox-dd">ご希望の予約方法を選び、相談予約をお取りください。シンプルなプランなのでお電話での相談やそのまま撮影日程調整も可能です</dd>
            </dl>
          </div>

          <div class="flowbox">
            <h4 class="flowbox-head4"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/flow/flow-num02.png"></h4>
            <dl class="flowbox-dl">
              <dt class="flowbox-dt">プラン相談・撮影日を決定</dt>
              <dd class="flowbox-dd">来店やオンラインなど、ご希望をヒアリングして撮影提案をいたします。お急ぎ撮影や手間なく予約したい方はWEBからの撮影予約も可能。こだわり派ならスタジオ・衣裳見学やお見積り相談・撮影までに装花打合せも可能。</dd>
            </dl>
          </div>

          <div class="flowbox">
            <h4 class="flowbox-head4"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/flow/flow-num03.png"></h4>
            <div class="flowbox-inbox">
              <dl class="flowbox-dl-last">
                <dt class="flowbox-dt">ウェディングフォト撮影</dt>
                <dd class="flowbox-dd">撮影カットやご希望について
                確認の上、ヘアメイクをスタート。プロもカメラマンが撮影時におふたりが素敵に見えるポーズなど具体的にお声掛けさせていただきます。</dd>
              </dl>
              <p class="flow-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/flow/flow-img01.png"></p>
            </div>
            
          </div>

          
        </section>

        <section id="top-reservation">
          <h2 class="yumin">RESERVATION</h2>
          <p class="yugo">ご相談・予約方法</p>
          <h3 class="top-studio-head3"><span><b>選べるご予約スタイル</b></span><br>ご希望にあわせてお選びください</h3>

          <div class="tab-panel2">
            <!--タブ-->
            <ul class="tab-group2">
              <li class="tab2 tab-A is-active2">サロン相談</li>
              <li class="tab2 tab-B">オンライン相談</li>
              <li class="tab2 tab-C">撮影予約</li>
            </ul>
            
            <!--タブを切り替えて表示するコンテンツ-->
            <div class="panel-group2">
              <div class="panel2 tab-A is-show2">
                
                <p class="top-reservation-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/reservation/reservation-img01.png"></p>
                <dl class="top-reservation-dl">
                  <dt class="top-reservation-dt afm"><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lcle-lfreld-71bd003a3704fa19738f3d960f6fde29&_gl=1*hyv7cl*_ga*NDcxNzg4ODQ0LjE2Mjc1MzM2OTY.*_ga_5XPTCLHFTE*MTY3MDQzMjY3OC41OS4wLjE2NzA0MzI2NzguNjAuMC4w*_ga_RC50ZS5C51*MTY3MDQzMjY3OC4zMy4wLjE2NzA0MzI2ODAuNTguMC4w&_ga=2.251865609.1001964160.1670202860-471788844.1627533696">じっくりと相談したい方におすすめ</a></dt>
                  <dd class="top-reservation-dd">フォトプランナーがおふたりのご希望を<br>
                  丁寧にヒアリングし最適な撮影スタイルや<br>
                  衣裳、ヘアメイクイメージをご提案いたします。<br>
                  スタジオご見学のみも可能です！<br>
                  お気軽にお問い合わせください。</dd>
                </dl>
                <dl class="top-reservation-box">
                  <dt class="top-reservation-box-dt"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/reservation/reservation-img02.png"></dt>
                  <dd class="top-reservation-box-dd">実際のスタジオセットを<br>ご覧いただきながら<br>撮影イメージのご相談が<br>可能です。</dd>
                </dl>
                <dl class="top-reservation-box">
                  <dt class="top-reservation-box-dt"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/reservation/reservation-img03.png"></dt>
                  <dd class="top-reservation-box-dd">展示されている衣裳を<br>事前にチェックすることも<br>できるので安心。</dd>
                </dl>
              </div>
              <div class="panel2 tab-B">
                
                <p class="top-reservation-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/reservation/reservation-img04.png"></p>
                <dl class="top-reservation-dl">
                  <dt class="top-reservation-dt afm"><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lcle-lfreld-71bd003a3704fa19738f3d960f6fde29&_gl=1*hyv7cl*_ga*NDcxNzg4ODQ0LjE2Mjc1MzM2OTY.*_ga_5XPTCLHFTE*MTY3MDQzMjY3OC41OS4wLjE2NzA0MzI2NzguNjAuMC4w*_ga_RC50ZS5C51*MTY3MDQzMjY3OC4zMy4wLjE2NzA0MzI2ODAuNTguMC4w&_ga=2.251865609.1001964160.1670202860-471788844.1627533696">ご自宅でらくらくオンライン相談</a></dt>
                  <dd class="top-reservation-dd">ご自宅や出先でも相談可能<br>
遠方にお住まいの方やご来館が難しい方にもおすすめ。<br>
スマホでも参加できるので<br>
お気軽にお問い合わせください。</dd>
                </dl>
              </div>
              <div class="panel2 tab-C">
                
                <p class="top-reservation-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/reservation/reservation-img05.png"></p>
                <dl class="top-reservation-dl">
                  <dt class="top-reservation-dt afm"><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lcle-lfrela-b01b13a64c0688e14f78e88d9896f777">申し込み簡単予約</a></dt>
                  <dd class="top-reservation-dd">お急ぎ撮影にも最適<br>
ご相談不要で撮影したい日程を入れるだけ！<br>
メール上で撮影プランやオプションが<br>
決められ簡単にご予約ができます。</dd>
                </dl>
              </div>
            </div>
          </div>
        </section>
        <section id="top-promise">
          <h2 class="yumin">PROMISE</h2>
          <p class="yugo">スタジオでの安心・安全対策</p>
          <p class="top-promise-txt">撮影当日もお客様の健康と安全を最優先し、<br>3密回避や施設・スタジオ内の消毒など<br>様々な感染予防対策を実施しています。</p>
          <p class="top-promise-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/promise/promise-img01.png"></p>
        </section>

        <section id="top-access">
          <h2 class="yumin">ACCESS</h2>
          <p class="yugo">アクセス</p>
          <p class="top-access-img"><img src="<?php bloginfo('template_directory'); ?>/asset/image/newtop/access/access-img01.png"></p>
          <h3 class="top-access-head3">スタジオフォトパーク東京</h3>
          <ul class="top-access-category">
            <li class="top-access-category-li">相談サロン</li>
            <li class="top-access-category-li">撮影スタジオ</li>
          </ul>
          <dl class="top-access-info">
            <dt class="top-access-info-dt">住所</dt>
            <dd class="top-access-info-dd">東京都新宿区下落合4-1-1BASETOKYO1F</dd>
          </dl>
          <dl class="top-access-info">
            <dt class="top-access-info-dt">アクセス</dt>
            <dd class="top-access-info-dd">JR山手線　高田馬場駅より徒歩12分<br>西武新宿線　下落合駅より徒歩5分</dd>
          </dl>
          <dl class="top-access-info">
            <dt class="top-access-info-dt">電話</dt>
            <dd class="top-access-info-dd">0120-948-546</dd>
          </dl>
          <dl class="top-access-info">
            <dt class="top-access-info-dt">営業時間</dt>
            <dd class="top-access-info-dd">10：00～19：00</dd>
          </dl>
          <dl class="top-access-info-last">
            <dt class="top-access-info-dt">定休日</dt>
            <dd class="top-access-info-dd">月曜・火曜定休 （祝日を除く）<br>※月・火曜が祝日の場合は翌水曜が振替休業</dd>
          </dl>
          <p class="nennmatu2">【ご案内】12/26(月)〜1/3(火)は年末年始休業<br>1/4(水)より通常営業いたします</p>
                  <style type="text/css">
                    .nennmatu2{
                      text-align: center;
                      line-height: 1.5em;
                      color: #cc6666;
                      margin-bottom: 5%;
                    }
                  </style>
          <p class="ggmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.3850282838275!2d139.69418643139602!3d35.71674821681104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188da950acfb29%3A0x8eebc30f8038f0bf!2zc3R1ZGlvIFBIT1RPIFBBUksg5p2x5Lqs77yI44K544K_44K444Kq44OV44Kp44OI44OR44O844Kv77yJ!5e0!3m2!1sja!2sjp!4v1669852346503!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </p>
          
        </section>

          <div class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/asset/image/header/logo.png" alt="logo" />
              </div>
        </section>
      <script type="text/javascript">
          //topslider
const topslider = new Swiper ('.topslider', {
    loop: true,
  autoplay: {
    delay: 3000,
  },
  speed: 1000,
  effect: "fade",
  /* これが必要 */
  fadeEffect: { 
    crossFade: true
  },
});


    //Slider2
const slider2 = new Swiper ('.slider2', {
  slidesPerView: 1.1,
  centeredSlides : true,
  spaceBetween: 10,
  pagination: { 
        el: '.swiper-pagination2', 
        type: 'bullets', 
        clickable: true 
    },
});
    //Slider3
const slider3 = new Swiper ('.slider3', {
loop: true,
  pagination: {
    el: '.swiper-pagination3',
    type: 'bullets',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// slideToメソッドを実行する関数を定義
function slideThumb(index) {
 slider3.slideTo(index);
}
  
  // アコーディオン

jQuery(function ($) {
jQuery('.js-accordion-title').on('click', function () {
  /*クリックでコンテンツを開閉*/
  jQuery(this).next().slideToggle(200);
  /*矢印の向きを変更*/
  jQuery(this).toggleClass('open', 200);
});

});

jQuery(function(){
jQuery("#acMenu dt").on("click", function() {
jQuery(this).next().slideToggle();
});
});
jQuery(function(){
jQuery("#acMenu2 dt").on("click", function() {
jQuery(this).next().slideToggle();
});
});

//タブ切り替え

jQuery(function($){
  $('.tab').click(function(){
    $('.is-active').removeClass('is-active');
    $(this).addClass('is-active');
    $('.is-show').removeClass('is-show');
    // クリックしたタブからインデックス番号を取得
    const index = $(this).index();
    // クリックしたタブと同じインデックス番号をもつコンテンツを表
    $('.panel').eq(index).addClass('is-show');
  });
});

//タブ切り替え

jQuery(function($){
  $('.tab2').click(function(){
    $('.is-active2').removeClass('is-active2');
    $(this).addClass('is-active2');
    $('.is-show2').removeClass('is-show2');
    // クリックしたタブからインデックス番号を取得
    const index = $(this).index();
    // クリックしたタブと同じインデックス番号をもつコンテンツを表
    $('.panel2').eq(index).addClass('is-show2');
  });
});



jQuery(function () {
    const slider1 = new Swiper ('.slider1', {
//ページネーション
    pagination: {
        el: '.swiper-pagination1',
        type: 'bullets',
        clickable: true
    },
     //ループ
    loop: true,
    // 自動スライド
    autoplay: {
        delay: 10000,
        stopOnLastSlide: false,
        disableOnInteraction: true,
        reverseDirection: false
    }

});
    swiper.autoplay.stop(); //画面に現れるまでswiperを停止
    jQuery(window).on('scroll', function () {
        let position = $('.slider1').offset().top - $(window).innerHeight() + 100,
            scrollTop = $(window).scrollTop(); 
        if(scrollTop > position) {
            swiper.autoplay.start(); //画面に現れたらswiperを開始
        }else{
            swiper.autoplay.stop(); // 画面外にスクロールしたらswiperを停止
        }
    });
});

</script>
      <?php get_footer(); ?>
    </main>

<div class="fixed_bottom only-sp">
  <div class="fixed_bottom__inner">
    <ul class="fixed_ul">
        <li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lcle-lfremd-08e42fb459845a32c3e7577a0e93d120">無料相談予約</a></li>
         <li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lcle-lfrelf-8092c9248cb4b70a7b58ce4ff0a8faa9">撮影予約</a></li>
         <li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lcle-lfrelg-38315dea52c41b5a2a5ffd0f06473156">お問い合わせ</a></li>
    </ul>
  </div>
</div>
      
  
    <!-- JavaScript -->

   
    <script src="https://cdn.jsdelivr.net/simplyscroll/2/jquery.simplyscroll.min.js"></script>
    <script type="text/javascript">
      $(function() {
  $("#loopSlide").simplyScroll();
});
    </script>
    <style type="text/css">
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, summary, time, mark, audio, video{
  font-family: "游ゴシック体", YuGothic, "游ゴシック Medium", "Yu Gothic Medium", "游ゴシック", "Yu Gothic", sans-serif !important;
}
.yumin {
    font-family: "yumin" !important;
}


.swiper-container {
    box-shadow: none;
}
      .simply-scroll-container {
  position: relative;
}
.simply-scroll-clip {
  position: relative;
  overflow: hidden;
}
.simply-scroll-list {
  overflow: hidden;
  margin: 0;
  padding: 0;
  height: 200px; /* 崩れる場合にはこちらも設定 */
}
.simply-scroll-list li {
  list-style:none !important;
  float: left;
  width: 200px;
  height: 200px;
  margin: 0;
  padding: 0;
}
.simply-scroll-list li img {
  display: block;
}
@media (min-width: 769px){
.swiper-container {
    position: relative;
    overflow: hidden;
    list-style: none;
    padding: 0;
    z-index: 1;
    width: 100% !important;
    margin: 0 auto !important;
    max-width: 650px;
}
}
    </style>
<script type="text/javascript">
  
var headNav = $("header");
/* 初期表示、スクロール時にイベント開始 */
$(window).on("load scroll", function () {
    /* スクロール位置の高さが200pxより大きい、かつis-fixedクラスがない場合 */
    if ($(this).scrollTop() > 200 && headNav.hasClass("is-fixed") == false) {
        headNav.css("display", "block");
        headNav.css({ "top": "-72px" }); /* ヘッダーの高さ分マイナスにする */
        headNav.addClass("is-fixed");
        headNav.animate({ "top": 0 }, 600);
    }
    /* スクロール位置の高さが200pxより小さい、かつis-fixedクラスがある場合 */
    else if ($(this).scrollTop() < 200 && headNav.hasClass("is-fixed") == true) {
        headNav.removeClass("is-fixed");
        headNav.css("display", "none");
    }
});
</script>
  </body>

