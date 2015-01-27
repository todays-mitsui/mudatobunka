<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>無駄と文化</title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">

<header class="header">
  <div class="unit">
    <a href="/">
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
  <article class="unit-article">
    <section class="main">
      <header>
        <h2>HTML5における空の値の属性</h2>
      </header>
      <div class="unit-article-body">
        <p>属性に空の値を指定する時は、例えばalt=""などと書く。実は仕様のHTML文法にはもうひとつ書き方が用意されており、それはaltとのみ書くという形のものだ。確かにこう書けるし、真偽値を取る属性で属性のみ書く方法もこの文法規定がベースになっている。少し前に読んだalt属性の書き方ガイドといったような記事ではそのように触れられている。しかし僕は属性のみを書くのは真偽値を取る属性のみに限定した方が良いように考えている。</p>
        <p>属性に空の値を指定する時は、例えばalt=""などと書く。実は仕様のHTML文法にはもうひとつ書き方が用意されており、それはaltとのみ書くという形のものだ。確かにこう書けるし、真偽値を取る属性で属性のみ書く方法もこの文法規定がベースになっている。少し前に読んだalt属性の書き方ガイドといったような記事ではそのように触れられている。しかし僕は属性のみを書くのは真偽値を取る属性のみに限定した方が良いように考えている。</p>
<pre><code class="javascript">jQuery(function($) {
  console.log('Hello,world!');
});</code></pre>        
        <p>属性に空の値を指定する時は、例えばalt=""などと書く。実は仕様のHTML文法にはもうひとつ書き方が用意されており、それはaltとのみ書くという形のものだ。確かにこう書けるし、真偽値を取る属性で属性のみ書く方法もこの文法規定がベースになっている。少し前に読んだalt属性の書き方ガイドといったような記事ではそのように触れられている。しかし僕は属性のみを書くのは真偽値を取る属性のみに限定した方が良いように考えている。</p>
      </div><!-- //.article-body -->
    </section><!-- //.main -->
    <aside class="side">
      <time class="unit-article-post-date" datetime="2011-03-09">2011-03-09</time>
    </aside><!-- //.side -->
  </article>
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

<script src="js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>