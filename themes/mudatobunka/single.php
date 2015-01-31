<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>無駄と文化</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>
<body>
<div class="container">

<header class="header">
  <div class="unit">
    <a href="<?php echo home_url(); ?>">
      <h1><?php bloginfo('name'); ?></h1>
      <p class="subtitle">実用的ブログ</p>
    </a>
  </div><!-- //.unit -->
  <ul class="gnav">
    <li><a href="<?php echo home_url('/about/'); ?>">ABOUT</a></li>
    <li><a href="<?php echo home_url(); ?>">ARCHIVE</a></li>
    <li><a href="" target="_blank"><i class="fa fa-twitter" title="Twitter"></i></a></li>
    <li><a href="" target="_blank"><i class="fa fa-instagram" title="Instagram"></i></a></li>
    <li><a href="" target="_blank"><i class="fa fa-tumblr-square" title="Tumblr"></i></a></li>
  </ul>
</header>

<div class="wrapper">
<?php
if (have_posts()) :
  while (have_posts()) :
    the_post();
?>
  <article class="unit-article">
    <section class="main">
      <header>
        <h2><?php the_title(); ?></h2>
      </header>
      <div class="unit-article-body">
<?php
    the_content();
?>
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

<footer class="footer">
  <ul class="gnav">
    <li><a href="<?php echo home_url('/about/'); ?>">ABOUT</a></li>
    <li><a href="<?php echo home_url(); ?>">ARCHIVE</a></li>
    <li><a href="" target="_blank"><i class="fa fa-twitter" title="Twitter"></i></a></li>
    <li><a href="" target="_blank"><i class="fa fa-instagram" title="Instagram"></i></a></li>
    <li><a href="" target="_blank"><i class="fa fa-tumblr-square" title="Tumblr"></i></a></li>
  </ul>
  <address class="copyright">&copy 2015 Mitsui.</address>
</footer>

</div><!-- //.container -->

<script src="<?php bloginfo('template_url'); ?>/js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php wp_footer(); ?>
</body>
</html>