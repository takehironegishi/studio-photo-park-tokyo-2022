<?php
/*
Template Name: flower-arrange
*/
 get_header(); ?>
 <style type="text/css">
main {
    max-width: 750px;
    margin: 0 auto;
}
section#topkv {
    margin-bottom: 20%;
}
/*スクロールダウン全体の場所*/
.scrolldown1{
    /*描画位置※位置は適宜調整してください*/
  position:absolute;
  left:50%;
  bottom:10px;
    /*全体の高さ*/
  height:50px;
}
#scrolldown{
    position: relative;
}
/*Scrollテキストの描写*/
.scrolldown1 span{
    /*描画位置*/
  position: absolute;
  left:-15px;
  top: -15px;
    /*テキストの形状*/
  color: #000;
  font-size: 0.7rem;
  letter-spacing: 0.05em;
}
/* 線の描写 */
.scrolldown1::after{
  content: "";
    /*描画位置*/
  position: absolute;
  top: 0;
    /*線の形状*/
  width: 1px;
  height: 120px;
  background: #000;
    /*線の動き1.4秒かけて動く。永遠にループ*/
  animation: pathmove 1.4s ease-in-out infinite;
  opacity:0;
}
/*高さ・位置・透過が変化して線が上から下に動く*/
@keyframes pathmove{
  0%{
    height:0;
    top:0;
    opacity: 0;
  }
  30%{
    height:30px;
    opacity: 1;
  }
  100%{
    height:0;
    top:50px;
    opacity: 0;
  }
}
h2.soka-about-head2 {
    text-align: center;
    margin: 0 auto;
    width: 60%;
}
h2.soka-about-head2 img {
    text-align: center;
    margin: 0 auto 10%;
}
p.soka-about-txt {
    text-align: center;
    line-height: 1.8em;
    margin-bottom: 10%;
    position: relative;
}
.soka-about-box01 {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 10%;
    align-items: center;
    justify-content: space-around;
}
.soka-about-box02 {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 10%;
    align-items: center;
    justify-content: space-around;
}
.swiper-container.slider1 {
    width: 52% !important;
}
.swiper-container.slider2 {
    width: 52% !important;
}
.swiper-container.slider3 {
    width: 52% !important;
}
p.soka-about-box01-txt{
   width: 40%;
    font-size: 90%;
}
p.soka-about-box02-txt{
    width: 40%;
    padding-left: 5%;
    font-size: 90%;
}
section#soka-plan {
    background: #FAF8F8;
    padding: 10% 0;
    position: relative;
}
p.soka-plan-bg {
    position: absolute;
    top: 2%;
}
h3.soka-plan-head3 {
    text-align: center;
    line-height: 1.8em;
    margin-bottom: 10%;
    font-size: 100%;
}
/*
右から左へ
----------------------------*/
@keyframes infinity-scroll-left {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-100%);
  }
}

/*
IE11対策
----------------------------*/
_:-ms-lang(x)::-ms-backdrop,
.img-slide {
  display: -ms-grid;
  overflow: hidden;
}
/*----------------------------*/

.img-slide__wrap {
  display: flex;
  overflow: hidden;
}

.img-slide__list {
  display: flex;
  list-style: none;
}

.img-slide__list--left{
animation :infinity-scroll-left 35s infinite linear 0.5s both;
}

.img-slide__item {
  width: calc(100vw / 4);
}
.img-slide__item > img{
   width: 100%;
}
.img-slide {
    margin-bottom: 10%;
}
h2.soka-plan-head2 {
    text-align: center;
    font-size: 30px;
    margin-bottom: 5%;
}
dl.soka-plan-point {
    width: 90%;
    margin: 0 auto 8%;
}
dt.soka-plan-point-dt {
    margin-bottom: -10px;
    width: 50%;
}
dd.soka-plan-point-dd {
    border-top: solid 2px #909090;
    border-bottom: solid 2px #909090;
    padding: 5%;
    font-size: 75%;
    line-height: 1.8em;
    position: relative;
}
dd.soka-plan-point-dd span {
    color: #dc7699;
}
dd.soka-plan-point-dd:before {
    content: "";
    position: absolute;
    left: 0;
    top: -2px;
    width: 50%;
    height: inherit;
    border-top: 2px solid #dc7699;
}
.plan-box {
    position: relative;
}
p.plan-box-bgttl {
    position: absolute;
    top: 0;
}
h3.plan-box-head3 {
    font-size: 140%;
    margin-bottom: 10%;
    padding-top: 13%;
    padding-left: 5%;
}
.swiper-container.slider4,
.swiper-container.slider5,
.swiper-container.slider6 {
    width: 85% !important;
    margin: 0 auto 5% !important;
}
p.plan-box-txt {
    font-size: 88%;
    line-height: 1.8em;
    margin-bottom: 5%;
    width: 85%;
    margin: 0 auto 5%;
}
p.plan-box-price {
    font-size: 100%;
    line-height: 1.8em;
    width: 85%;
    margin: 0 auto 5%;
}
dt.soka-plan-point-dt2 {
    font-size: 140%;
    padding-left: 2em;
    color: #76649D;
    font-weight: 700;
}
section#soka-recommend {
    background: #FAF8F8;
    padding: 10% 0;
}
h2.soka-recommend-h2 {
    text-align: center;
    font-size: 30px;
    margin-bottom: 5%;
}
h3.soka-recommend-h3 {
    text-align: center;
    line-height: 1.8em;
    margin-bottom: 10%;
    font-size: 100%;
}
.soka-recommend-box {
      background: #fff;
    margin: 0 auto 5%;
    overflow: hidden;
    padding: 5%;
}
p.soka-recommend-fukidashi {
    font-size: 100%;
    border: solid 1px #000;
    width: fit-content;
    position: relative;
    padding: 10px 20px;
    float: right;
    margin-bottom: 10%;
}

p.soka-recommend-fukidashi::before{
    position: absolute;
  left: 102px;
  bottom: -21px;
  width: 0;
  height: 0;
  content: '';
  border-width: 21px 21px 0 0;
  border-style: solid;
  border-color: #000 transparent transparent transparent;
}
p.soka-recommend-fukidashi::after{
position: absolute;
    left: 100px;
    bottom: -21px;
    width: 0;
    height: 0;
    content: '';
    border-width: 20px 20px 0 0;
    border-style: solid;
    border-color: #fff transparent transparent transparent;
}
h4.soka-recommend-h4 {
    clear: both;
    font-size: 140%;
    letter-spacing: 2px;
}
span.soka-recommend-puple {
    color: #76649D;
}
span.soka-recommend-green {
    color: #6FB58F;
}
p.soka-recommend-price {
    font-size: 130%;
    font-weight: 700;
}
p.soka-recommend-price {
    font-size: 150%;
    font-weight: 700;
    margin: 5% 0;
}
p.soka-recommend-img {
    margin-bottom: 5%;
}
h5.soka-recommend-h5 {
    font-size: 100%;
    letter-spacing: 2px;
    position: relative;
    background: #fff;
    padding-right: 2em;
        margin-bottom: 5%;
}
li.soka-recommend-li {
    margin: 1%;
}
dt.soka-recommend-li-dt {
    text-align: center;
    margin-bottom: 3%;
    font-size: 85%;
}

ul.soka-recommend-ul {
    display: flex;
    justify-content: space-between;
    margin-bottom: 3%;
}

p.soka-recommend-caution {
    font-size: 75%;
}
p.soka-recommend-multiplicat {
    width: 10%;
    margin: 10px auto 10%;
}
p.soka-recommend-multiplicat img {
    text-align: center;
    margin: 0 auto;
}
.soka-planbox {
    display: flex;
    justify-content: space-between;
    width: 90%;
    margin: 0 auto 5%;
    align-items: center;
}
.soka-planbox-left {
    width: 50%;
}
p.soka-planbox-right {
    width: 50%;
}
dl.soka-planbox-left-dl {
        font-size: 90%;
    margin-bottom: 15%;
}
p.soka-planbox-left-price {
    font-size: 90%;
}
.accordion-click {
    width: 90%;
    margin: 0 auto;
}
.accordion-click > p {
    border: solid 1px #000;
    text-align: center;
    padding: 10px;
    margin-bottom: 5%;
    font-weight: 600;
}
h3.accordion-content-head3 {
    width: fit-content;
    background: #ddd;
    padding: 5px;
    margin-left: 5%;
    margin-bottom: 10px;
}
p.accordion-content-txt {
    font-size: 90%;
    width: 90%;
    margin: 0 auto 5%;
}
p.accordion-content-price {
    font-size: 110%;
    margin-bottom: 3%;
    width: 90%;
    margin: 0 auto;
}
p.accordion-content-price span {
    font-size: 140%;
    font-weight: 600;
}
span.soka-planbox-left-dd-green {
    color: #6FB58F;
}
section#soka-flow {
    padding: 5% 0;
    position: relative;
    background: #FAF8F8;
}
.soka-flow-box {
    display: flex;
    width: 90%;
    margin: 0 auto 5%;
    flex-wrap: wrap;
    justify-content: space-between;
}
p.soka-flow-number {
    width: 20%;
}
h2.soka-flow {
    text-align: center;
    font-size: 150%;
    font-weight: 600;
    margin-bottom: 10%;
}

dl.soka-flow-dl {
    position: relative;
    margin-bottom: 15%;
    width: 75%;
}

dt.soka-flow-dt {
    margin: 3% 0;
    font-size: 130%;
}
.soka-flow-img {
position: relative;
    min-height: 380px;
    margin-bottom: 5%;
}

p.soka-flow-img01 {
    padding-left: 4%;
    width: 80%;
}
p.soka-flow-img02 {
    position: absolute;
    bottom: 10px;
    right: 5%;
    width: 50%;
}
.soka-flow-img02 img {
    text-align: center;
    margin: 0 auto;
}
.swiper-container{
    box-shadow:inherit;
}
.soka-recommend-box2 {
    background: #fff;
    padding: 5% 0;
    margin-bottom: 10%;
}
p.soka-recommend-txt {
    text-align: center;
    font-size: 100%;
    margin-bottom: 5%;
}

ul.soka-gallery-ul01 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    margin-bottom: 5%;
}
ul.soka-gallery-ul02 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}
li.soka-gallery-li {
    width: 30%;
    margin: 1%;
    /* object-fit: cover; */
    /* height: 50px; */
}
li.soka-gallery-li a img {
    width: 250px;
    height: 150px;
    object-fit: cover;
}
.accordion-content {
  display: none;
}
.accordion-title {
  position: relative;
}
.accordion-title::after {
  border-right: solid 2px #000; 
  border-top: solid 2px #000;
  content: "";
  display: block;
  height: 8px;
  position: absolute;
  right: 15px;
  top: 38%;
  transform: rotate(135deg);
  transition: transform .3s ease-in-out, top .3s ease-in-out;
  width: 8px;
}
.accordion-title.open::after {
  top: 45%; 
  transform: rotate(-45deg); 
}
section#soka-gallery {
    padding: 10% 0;
}
h2.soka-gallery-head2 {
    text-align: center;
    margin-bottom: 5%;
    font-size: 120%;
}



section#soka-about {
    position: relative;
}
p.soka-about-bg {
    position: absolute;
    top: 5%;
    right: 0;
}
p.soka-about-bg img {
    width: 80px;
}
p.soka-flow-bg01 {
    position: absolute;
    top: 1%;
    right: 0;
}
p.soka-flow-bg01 img {
    width: 69px;
}
p.soka-flow-bg02 {
    position: absolute;
    bottom: 17%;
}
p.soka-flow-bg02 img {
    width: 80px;
}

p.soka-plan-bg {
    position: absolute;
    top: 4%;
}
p.soka-plan-bg img {
    width: 60px;
}
/*========= LoadingのためのCSS ===============*/

/* Loading背景画面設定　*/
#splash {
    /*fixedで全面に固定*/
  position: fixed;
  width: 100%;
  height: 100%;
  z-index: 999;
  background:#fff;
  text-align:center;
  color:#fff;
}

/* Loading画像中央配置　*/
#splash_logo {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Loading アイコンの大きさ設定　*/
#splash_logo img {
  width:260px;
}

/* fadeUpをするアイコンの動き */

.fadeUp{
animation-name: fadeUpAnime;
animation-duration:0.5s;
animation-fill-mode:forwards;
opacity: 0;
}

@keyframes fadeUpAnime{
  from {
    opacity: 0;
  transform: translateY(100px);
  }

  to {
    opacity: 1;
  transform: translateY(0);
  }
}

ul.soka-plan-ul3img {
    display: flex;
    justify-content: space-evenly;
    margin-bottom: 50px;
}
p.other-plan-bt a {
    border: solid 1px #000;
    text-align: center;
    padding: 10px;
    margin-bottom: 5%;
    font-weight: 600;
    width: 90%;
    margin: 0 auto 5%;
    display: block;
}
/* PC対応 */
@media(min-width: 769px) {
li.soka-gallery-li a img {
    width: 250px;
    height: 250px;
    object-fit: cover;
}
.soka-flow-img {
    position: relative;
    min-height: 600px;
    margin-bottom: 5%;
}

p.soka-flow-img01 {
    padding-left: 10%;
}
p.soka-flow-img02 {
    position: absolute;
    bottom: 10px;
    right: 5%;
}
p.soka-recommend-fukidashi {
    font-size: 130%;
    border: solid 1px #000;
    width: fit-content;
    position: relative;
    padding: 10px 20px;
    float: right;
        margin-bottom: 10%;
}
h5.soka-recommend-h5 {
    font-size: 140%;
    letter-spacing: 2px;
    position: relative;
    background: #fff;
    padding-right: 2em;
}
dt.soka-recommend-li-dt {
    text-align: center;
    margin-bottom: 3%;
    font-size: 120%;
}
dd.soka-plan-point-dd {
    border-top: solid 2px #909090;
    border-bottom: solid 2px #909090;
    padding: 5%;
    font-size: 110%;
    line-height: 1.8em;
    position: relative;
}
p.soka-recommend-txt {
    text-align: center;
    font-size: 120%;
    margin-bottom: 5%;
}
    }
</style>
 <!-- Lightbox用ファイルとjQueryをCDNから読み込む -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

  <div id="splash">
    <div id="splash_logo">
      <img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/load/loadimg.png" alt="" class="fadeUp">
    </div>
  </div>

        <main>
            <section id="topkv">
                    <div class="inner">
                        <p class="top-kv"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/top/topkv.jpg" alt=""></p>
                    </div>
            </section>
            <section id="scrolldown">
            <div class="scrolldown1"></div>
            </section>
            <section id="soka-about">
              <p class="soka-about-bg"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/about/about_bg.png"></p>
                <h2 class="soka-about-head2"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/about/about_ttl.png" alt=""></h2>
                <p class="soka-about-txt">世界にひとつだけの<br>オーダーメイドフラワーで<br>もっと自分らしく美しく</p>

                <div class="soka-about-box01">
                    <div class="swiper-container slider1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/about/01.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/about/02.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/about/03.jpg"></div>
                        </div>
                    </div>
                    <p class="soka-about-box01-txt">あなたの為だけに<br>お花を束ねながら<br>ご提案</p>
                </div>

                <div class="soka-about-box02">
                    <p class="soka-about-box02-txt">“あなたらしさ”が叶う<br>唯一無二の世界観</p>
                    <div class="swiper-container slider2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/about/04.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/about/05.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/about/06.jpg"></div>
                        </div>
                    </div>
                </div>

                <div class="soka-about-box01">
                    <div class="swiper-container slider3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/about/07.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/about/08.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/about/09.jpg"></div>
                        </div>
                    </div>
                    <p class="soka-about-box01-txt">特別な瞬間に<br>彩り豊かな喜びを</p>
                </div>
            </section>

            <section id="soka-plan">
              <p class="soka-plan-bg"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan_bg.png"></p>
                <h3 class="soka-plan-head3">スタジオを装花で彩る空間装飾<br>
                花嫁さまを美しく魅せるブーケ・ヘアード<br>
                お気に入りのフラワーコーディネートで<br>
                最高の瞬間を、もっと美しく</h3>

                <!-- 画像横スライド -->

                       <ul class="soka-plan-ul3img">
                           <li class="soka-plan-ul3img-li"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/slide01.jpg"></li>
                           <li class="soka-plan-ul3img-li"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/slide02.jpg"></li>
                           <li class="isoka-plan-ul3img-lim"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/slide03.jpg"></li>
                        </ul>

                <h2 class="soka-plan-head2">FLOWER PLAN</h2>
                <h3 class="soka-plan-head3">フローリストがおふたりの好みや雰囲気から<br>
                あなたを輝かせるコーディネートを提案いたします</h3>
                <dl class="soka-plan-point">
                    <dt class="soka-plan-point-dt"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/point_head.png"></dt>
                    <dd class="soka-plan-point-dd">全てのプランにフローリストとのお打ち合わせが含まれます<br>生花でオーダーいただくと、撮影で使用した装花を当日<span>お持ち帰り</span>いただけます<br>※お打ち合わせなしでのオーダーも承ります</dd>
                </dl>

                <div class="plan-box bouquet">
                    <p class="plan-box-bgttl"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/bouquet_bg.png"></p>
                    <h3 class="plan-box-head3">ブーケ＆ブートニア</h3>
                    <div class="swiper-container slider4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img00.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img01.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img02.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img03.jpg"></div>

                        </div>
                    </div>
                    <p class="plan-box-txt">ドレス、アクセサリーに、ご本人の雰囲気など<br>
                    トータルで考え、おふたりの魅力をより引き出す<br>
                    Only oneのブーケとブートニアをお創りいたします。</p>
                    <p class="plan-box-price">アートフラワーオーダー（レンタル）：¥16,500~<br>生花オーダー：¥33,000~</p>
                </div>

                <div class="plan-box headparts">
                    <p class="plan-box-bgttl"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/headparts_bg.png"></p>
                    <h3 class="plan-box-head3">ヘッドパーツ</h3>
                    <div class="swiper-container slider5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img04.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img05.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img06.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img10.jpg"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img11.jpg"></div>
                        </div>
                    </div>
                    <p class="plan-box-txt">ドレスや着物を選ぶようにお花を一輪一輪お選びして<br>彩りや香りが記憶に残るウェディングフラワーを<br>ご提案します</p>
                    <p class="plan-box-price">アートフラワーオーダー（レンタル）：¥5,500〜<br>生花オーダー：¥11,000〜</p>
                </div>

                <div class="plan-box spacedecoration">
                    <p class="plan-box-bgttl"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/spacedecoration_bg.png"></p>
                    <h3 class="plan-box-head3">空間装飾</h3>
                    <div class="swiper-container slider5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img07.png"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img08.png"></div>
                            <div class="swiper-slide"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/plan-box-img09.png"></div>
                        </div>
                    </div>
                    <p class="plan-box-txt">数多くの結婚式をプロデュースしてきたフローリストが<br>おふたりのご希望や想い、好きなお花をお伺いしながら<br>スタジオフォトパークを舞台に<br>オリジナリティ溢れる空間を作り上げます。</p>
                    <p class="plan-box-price">空間1ヶ所：¥33,000<br>空間2ヶ所：¥55,000</p>
                </div>

                <dl class="soka-plan-point">
                    <dt class="soka-plan-point-dt2">お持ち込み</dt>
                    <dd class="soka-plan-point-dd">衣裳・撮影小物のお持ち込みは無料にて承っております。<br>おふたりらしい撮影を存分に叶えるお手伝いをいたします。</dd>
                </dl>
            </section>

            <section id="soka-recommend">
                <h2 class="soka-recommend-h2">RECOMMEND</h2>
                <h3 class="soka-recommend-h3">おすすめの撮影プランとの組み合わせをご紹介<br>自由自在の組み合わせであなたらしさ溢れる撮影を</h3>
                <div class="soka-recommend-box boxgrad">
                    <p class="soka-recommend-fukidashi">一番人気のプランと合わせる</p>
                    <h4 class="soka-recommend-h4"><span class="soka-recommend-puple">フラワーオーダーメイドプラン</span>×<span class="soka-recommend-green">運命の1着プラン</span></h4>
                    <p class="soka-recommend-price"><span>¥</span>154,000</p>
                    <p class="soka-recommend-img"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/recommend-box-img01.jpg"></p>
                    <h5 class="soka-recommend-h5"><span class="soka-recommend-puple">フラワーオーダーメイドプラン</span></h5>
                    <ul class="soka-recommend-ul">
                        <li class="soka-recommend-li">
                            <dl class="soka-recommend-li-dl">
                                <dt class="soka-recommend-li-dt">ブーケ＆ブートニア <br>¥16,500</dt>
                                <dd class="soka-recommend-li-dd"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/recommend-box-liimg01.jpg"></dd>
                            </dl>
                        </li>
                        <li class="soka-recommend-li">
                            <dl class="soka-recommend-li-dl">
                                <dt class="soka-recommend-li-dt">空間装飾<br>¥33,000</dt>
                                <dd class="soka-recommend-li-dd"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/recommend-box-liimg02.jpg"></dd>
                            </dl>
                        </li>
                        <li class="soka-recommend-li">
                            <dl class="soka-recommend-li-dl">
                                <dt class="soka-recommend-li-dt">ヘッドパーツ<br>¥5,500</dt>
                                <dd class="soka-recommend-li-dd"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/recommend-box-liimg03.jpg"></dd>
                            </dl>
                        </li>
                    </ul>
                    <p class="soka-recommend-caution">※オーダーいただく装花内容により金額に変動があります</p>
                </div>
                <p class="soka-recommend-multiplicat"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/batsu.png"></p>
                <div class="soka-recommend-box2">
                    <div class="soka-planbox">
                        <div class="soka-planbox-left">
                            <dl class="soka-planbox-left-dl">
                                <dt class="soka-planbox-left-dt">撮影プラン</dt>
                                <dd class="soka-planbox-left-dd">
                                    <span class="soka-planbox-left-dd-green">運命の一着プラン</span><br>(洋装・和装)
                                </dd>
                            </dl>
                            <p class="soka-planbox-left-price">基本料金 <span>¥99,000</span><br>土日祝は⇨¥11,000(税込)</p>
                        </div>
                        <p class="soka-planbox-right"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/planbox-rightimg01.jpg"></p>
                    </div>
                    <div id="accordion">
                        <div class="accordion-click">
                            <p class="accordion-title">この撮影プランに含まれているものをみる</p>
                        </div>
                        <div class="accordion-content">
                            <h3 class="accordion-content-head3">衣裳選び放題＆60分撮り放題</h3>
                            <p class="accordion-content-txt">洋装・和装どちらでも料金を気にせずお気に入りの1着をお選びいただけます</p>
                            <p class="accordion-content-price">基本料金 ￥<span>99,000</span>(税込)</p>
                            <p class="accordion-content-price">※土日祝は＋¥<span>11,000</span>(税込)</p>
                            <p class="accordion-content-plancontent"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/plan/accordion-img01.jpg"></p>
                        </div>
                    </div>
                </div>
                <p class="soka-recommend-txt">他のプランとフラワーオーダーメイドプランを<br>組み合わせいただけます！</p>
                <p class="other-plan-bt"><a href="https://photopla.jp/wedding/studio-photo-park-tokyo/plan/">他のプランを見る</a></p>
                        
            </section>

            <section id="soka-gallery">
                <h2 class="soka-gallery-head2">PHOTO GALLERY</h2>
                <ul class="soka-gallery-ul01">
                    <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img07.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img07.jpg"></a></li>
                    <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img08.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img08.jpg"></a></li>
                    <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img03.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img03.jpg"></a></li>
                    <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img02.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img02.jpg"></a></li>
                    <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img09.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img09.jpg"></a></li>
                     <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img01.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img01.jpg"></a></li>
                                
                                
                                
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img05.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img05.jpg"></a></li>
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img06.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img06.jpg"></a></li>
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img04.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img04.jpg"></a></li>
                                
                                
                </ul>
                <!-- <div id="accordion">
                        <div class="accordion-click">
                            <p class="accordion-title">VIEW MORE</p>
                        </div>
                        <div class="accordion-content">
                            <ul class="soka-gallery-ul02">
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img01.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img01.jpg"></a></li>
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img02.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img02.jpg"></a></li>
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img03.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img03.jpg"></a></li>
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img04.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img04.jpg"></a></li>
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img05.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img05.jpg"></a></li>
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img06.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img06.jpg"></a></li>
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img07.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img07.jpg"></a></li>
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img08.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img08.jpg"></a></li>
                                <li class="soka-gallery-li"><a href="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img09.jpg" data-lightbox="lightbox"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/gallery/gallery-img09.jpg"></a></li>
                            </ul>
                        </div>
                    </div> -->

            </section>

            <section id="soka-flow">
              <p class="soka-flow-bg01"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/flow/flow_bg01.png"></p>
              <p class="soka-flow-bg02"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/flow/flow_bg02.png"></p>
                <h2 class="soka-flow">FLOW</h2>
                <div class="soka-flow-box">
                    <p class="soka-flow-number"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/flow/flow_number01.png"></p>
                    <dl class="soka-flow-dl">
                        <dt class="soka-flow-dt">撮影お申込み</dt>
                        <dd class="soka-flow-dd">お申込み時にフラワーオーダーメイドプランのご希望がある場合はお知らせください。<br>
                        ※後からのお申し込みももちろん可能です。</dd>
                    </dl>
                </div>
                <div class="soka-flow-box">
                    <p class="soka-flow-number"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/flow/flow_number02.png"></p>
                    <dl class="soka-flow-dl">
                        <dt class="soka-flow-dt">お打ち合わせ</dt>
                        <dd class="soka-flow-dd">おふたりのお好みやイメージをヒアリングさせていただき理想のイメージをプロのフローリストがご提案します。<br><br>実際に花材を使用しブーケサンプルを作成する「体験型打ち合せ」はイメージが湧きやすく好評です<br><br>

                        じっくりこだわりが叶うお打ち合せはもちろん、写真などのイメージから依頼いただく簡単オーダーも可能ですのでお気軽にご相談ください。
                    </dd>
                    </dl>
                </div>
                <div class="soka-flow-img">
                    <p class="soka-flow-img01"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/flow/flow-img01.jpg"></p>
                    <p class="soka-flow-img02"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/flow/flow-img02.jpg"></p>
                </div>
                </dl>
                <div class="soka-flow-box">
                    <p class="soka-flow-number"><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/flow/flow_number03.png"></p>
                    <dl class="soka-flow-dl">
                            <dt class="soka-flow-dt">撮影当日</dt>
                            <dd class="soka-flow-dd">撮影当日のシャッター時間に一番美しい状態が保てるように心を込めてご用意をさせていただきます。美しいお花と共に最高の時間をお過ごしください。<br><br>
※生花の場合は当日お持ち帰りいただくことも可能です。ご自宅に飾って特別な余韻をお楽しみください。
                        </dd>
                    </dl>
                </div>
                
                </dl>
                <div class="soka-flow-img02">
                    <p><img src="/wedding/studio-photo-park-tokyo/wp-content/themes/photopla-wedding/asset/image/flower-arrange/flow/flow-img03.jpg"></p>
                </div>
            </section>

        </main>
<script type="text/javascript">
      //Slider1
var slider1 = new Swiper ('.slider1', {
loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  speed: 1000,
  effect: "fade",
  /* これが必要 */
  fadeEffect: { 
    crossFade: true
  },

});

    //Slider2
var slider2 = new Swiper ('.slider2', {
loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  speed: 1000,
  effect: "fade",
  /* これが必要 */
  fadeEffect: { 
    crossFade: true
  },

});
    //Slider3
var slider3 = new Swiper ('.slider3', {
loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  speed: 1000,
  effect: "fade",
  /* これが必要 */
  fadeEffect: { 
    crossFade: true
  },

});
    //Slider4
var slider4 = new Swiper ('.slider4', {
loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  speed: 1000,
  effect: "fade",
  /* これが必要 */
  fadeEffect: { 
    crossFade: true
  },

});
    //Slider4
var slider5 = new Swiper ('.slider5', {
loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  speed: 1000,
  effect: "fade",
  /* これが必要 */
  fadeEffect: { 
    crossFade: true
  },

});
    //Slider4
var slider6 = new Swiper ('.slider6', {
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
  
</script>
<?php get_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>
<script type="text/javascript">


jQuery(function () {
  jQuery(".accordion-click").on("click", function () {
    jQuery(this).next().slideToggle(300);
    jQuery(this).toggleClass("open", 300);
  });
});


//logoの表示
jQuery(window).on('load',function(){
  jQuery("#splash").delay(1500).fadeOut('slow');//ローディング画面を1.5秒（1500ms）待機してからフェードアウト
  jQuery("#splash_logo").delay(1200).fadeOut('slow');//ロゴを1.2秒（1200ms）待機してからフェードアウト
});
</script>


       