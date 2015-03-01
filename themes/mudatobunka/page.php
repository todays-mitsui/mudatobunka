<!doctype html>
<?php get_template_part('views/elements/head'); ?>

<body <?php body_class(); ?>>
<div class="container">

<?php get_template_part('views/elements/header'); ?>

<div class="wrapper">
<?php
if (have_posts()) :
  while (have_posts()) :
    the_post();
?>
  <article class="unit-article">
    <section class="main">
<?php
    if (has_post_thumbnail()) :
?>
      <div class="unit-article-eyecatch">
        <?php the_post_thumbnail_bg('large-eyecatch'); ?>
      </div><!-- //.unit-article-eyecatch -->
<?php
    endif;
?>
      <div class="unit-article-body">
<?php
    remove_filter('the_content', 'wpautop');
    the_content();
?>
      </div><!-- //.article-body -->
    </section><!-- //.main -->
  </article><!-- //.unit-article -->
<?php
  endwhile;
else :
?>
   <article class="unit-article">
    <section class="main">
      <header>
        <h2>記事はありません</h2>
      </header>
      <div class="unit-article-body">
        <p>お探しの記事は見つかりませんでした。</p>
      </div><!-- //.article-body -->
    </section><!-- //.main -->
  </article><!-- //.unit-article -->
<?php
endif;
?>
</div><!-- //.wrapper -->

<?php get_template_part('views/elements/footer'); ?>

</div><!-- //.container -->

<?php get_template_part('views/elements/script'); ?>

<?php wp_footer(); ?>
</body>
</html>