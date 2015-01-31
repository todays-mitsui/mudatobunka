<?php

// 記事抜粋の行末に追加される省略記号を変更
function new_excerpt_more($more) {
  return '...';
}  
add_filter('excerpt_more', 'new_excerpt_more');
