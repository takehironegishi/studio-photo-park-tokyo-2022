<?php 

get_header(); ?>

   <main class="lower-page">
    <div class="lower-title">
      <h2 class="bodoni">CAMPAIGN</h2>
      <h3 class="yonaga">おすすめキャンペーン   </h3>
    </div>



    <?php
      if ( have_posts() ) :

        while ( have_posts() ) : the_post();
        
        ?>
        
    <?php 
    global $post;
    $cf = get_post_meta($post->ID);
    ?>

        <h1 class="yonaga" itemprop="headline"><?php the_field('キャンペーンタイトル'); ?></h1>


           <?php if( get_field('kv画像') ): ?>
            <p class="campaign-page-kv"><img src="<?php the_field('kv画像'); ?>" /></p>
            <?php endif; ?>

            <?php if( get_field('フリーテキストkv下') ): ?>
            <div class="campaign-page-freebox">
              <p class="campaign-page-txt yonaga"><?php the_field('フリーテキストkv下'); ?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('内容（詳細）') ): ?>
           <dl class="campaign-head3">
               <dt class="yonaga">内容</dt>
               <dd class="bodoni">CONTENT</dd>
           </dl>
            <p class="campaign-page-txt01"><?php the_field('内容（詳細）'); ?></p>
            <?php endif; ?>

            <?php if( get_field('対象プラン') ): ?>
            <dl class="campaign-head3">
               <dt class="yonaga">対象プラン</dt>
               <dd class="bodoni">PLAN</dd>
           </dl>
            <p class="campaign-page-txt01"><?php the_field('対象プラン'); ?></p>
            <?php endif; ?>

            <?php if( get_field('申し込み条件') ): ?>
            <dl class="campaign-head3">
               <dt class="yonaga">申し込み条件</dt>
               <dd class="bodoni">TERMS</dd>
           </dl>
            <p class="campaign-page-txt01"><?php the_field('申し込み条件'); ?></p>
            <?php endif; ?>

            <?php if( get_field('備考テキスト') ): ?>
            <div class="campaign-page-freebox2">
              <p class="campaign-page-txt"><?php the_field('備考テキスト'); ?></p>
            </div>
            <?php endif; ?>

    <?php

        endwhile;

      else :
    ?>
    
    <p>投稿が見つかりません。</p>
        
    <?php
      endif;
    ?>

        </div>
    </main>


<?php get_footer(); ?>


