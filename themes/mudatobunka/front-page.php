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
      <header>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </header>
<?php
    if (has_post_thumbnail()) :
?>
      <div class="unit-article-eyecatch">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail_bg('eyecatch'); ?></a>
      </div><!-- //.unit-article-eyecatch -->
<?php
    endif;
?>
      <div class="unit-article-excerpt">
<?php
    the_excerpt();
?>
        <p class="unit-article-readmore"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
      </div><!-- //.article-body -->
    </section><!-- //.main -->
    <aside class="side">
      <time class="unit-article-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
    </aside><!-- //.side -->
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
    <aside class="side">
      <time class="unit-article-post-date">0000-00-00</time>
    </aside><!-- //.side -->
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