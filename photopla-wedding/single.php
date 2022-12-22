<?php get_header(); ?>

    <main class="lower-page">

    <?php
      if ( have_posts() ) :

        while ( have_posts() ) : the_post();
        
        ?>
        
    <?php 
    global $post;
    $cf = get_post_meta($post->ID);
    ?>
    <article id="post-<?php the_id(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting">

        <ul class="post-meta list-inline">
          <li class="date updated" itemprop="datePublished" datetime="<?php the_time('c');?>"><i class="fa fa-clock-o"></i> <?php the_time('Y.m.d');?></li>
        </ul>
        <h1 class="post-title" itemprop="headline"><?php the_title(); ?></h1>

      <section class="post-content" itemprop="text">

        <?php the_content(); ?>

      </section>

    </article>


    <?php

        endwhile;

      else :
    ?>
    
    <p>投稿が見つかりません。</p>
        
    <?php
      endif;
    ?>

    </main>
  

<?php get_footer(); ?>


