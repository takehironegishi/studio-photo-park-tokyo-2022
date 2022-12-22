<?php get_header(); ?>

    <main class="lower-page">
      <div class="inner">

      <div class="lower-title">
      <h2 class="yonaga"><?php the_title(); ?></h2>
      <h3 class="bodoni">Studio Photo Park Tokyo</h3>
    </div>

    <?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

        ?>


    <?php $cf = get_post_meta($post->ID); ?>
   

      <section class="post-content" itemprop="text">

        <?php the_content(); ?>
      </section>



        <?php

				endwhile;

			else :
		?>

    <p>投稿が見つかりません。</p>

    <?php
			endif;
		?>
</div>
    </section>
        </main>
<style type="text/css">
  div.wpcf7-mail-sent-ok {
border:none !important;
}
</style>

<?php
    $url = $_SERVER['REQUEST_URI'];
  if(strstr($url,'/consultation-reservation-form/')==true):
?>
  <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '/wedding/studio-photo-park-tokyo/consultation-reservation-form/thanks/';
}, false );
</script>
<?php elseif(strstr($url,'/photo-reservation-form/')==true): ?>
  <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '/wedding/studio-photo-park-tokyo/photo-reservation-form/thanks/';
}, false );
</script>
<?php elseif(strstr($url,'/contact/')==true): ?>
  <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '/contact/thanks/';
}, false );
</script>
<?php elseif(strstr($url,'/inquiry/')==true): ?>
  <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '/wedding/studio-photo-park-tokyo/thanks-inquiry/';
}, false );
</script>

<?php else: ?>
  
<?php endif; ?>
<?php get_footer(); ?>

