<?php

// 記事抜粋の行末に追加される省略記号を変更
function new_excerpt_more($more) {
  return '...';
}  
add_filter('excerpt_more', 'new_excerpt_more');


// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

// カスタムサムネイル画像のサイズの設定
add_image_size('eyecatch', 680, 380, true);

// サムネイル画像をbackground-imageとして配置
function the_post_thumbnail_bg($size=null, $set_width_and_height=false){
  $post_image_id    = get_post_thumbnail_id();
  $thumbnail_src    = wp_get_attachment_image_src($post_image_id, $size);
  $thumbnail_url    = $thumbnail_src[0];
  $thumbnail_width  = $thumbnail_src[1];
  $thumbnail_height = $thumbnail_src[2];

  $thumbnail_dom    = get_the_post_thumbnail($page->ID, $size);
  $m                = preg_match('/alt="([^"]+)"/', $thumbnail_dom, $thumbnail_alt);
  if ($m) {
    $thumbnail_alt  = $thumbnail_alt[1];
  } else {
    $thumbnail_alt  = preg_replace('{.*/}', '', $thumbnail_src);
  }

  if ($set_width_and_height) {
    $width_and_height = "display:inline-block;*display:inline;*zoom:1;width:${thumbnail_width}px;height:${thumbnail_height}px;background-repeat:no-repeat;";
  } else {
    $width_and_height = "";
  }

  $html = <<<EOS
<span class="unit-article-eyecatch-frame" style="${width_and_height}background-image:url(${thumbnail_url});text-indent:101%;white-space:nowrap;overflow:hidden;" data-width="${thumbnail_width}" data-height="${thumbnail_height}">${thumbnail_alt}</span>
EOS;
  echo "${html}\n";
}

/*
// 同上(過激派)
function post_thumbnail_custom_attribute($html, $post_id, $post_image_id){
  $thumbnail_src    = wp_get_attachment_image_src($post_image_id);
  $thumbnail_url    = $thumbnail_src[0];
  $thumbnail_width  = $thumbnail_src[1];
  $thumbnail_height = $thumbnail_src[2];

  $html = <<<EOS
<span class="unit-article-eyecatch-frame" style="${width_and_height}background-image:url(${thumbnail_url});text-indent:101%;white-space:nowrap;overflow:hidden;" data-width="${thumbnail_width}" data-height="${thumbnail_height}">thumbnail-image: ${thumbnail_name}</span>
EOS;
  return $html;
}
add_filter('post_thumbnail_html', 'post_thumbnail_custom_attribute', 10, 3);
*/