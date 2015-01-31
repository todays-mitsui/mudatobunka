<?php
function wrapCode($attrs, $content=null) {
  extract(shortcode_atts(array(
    'lang' => ''
  ), $attrs));

  $content = preg_replace('{<br\s*/?>$}im', '', $content);
  $content = preg_replace('{(^\n|\n$)}', '', $content);
  $content = htmlspecialchars($content, ENT_HTML5);

  return "<pre><code class=\"${lang}\">${content}</code></pre>";
}
add_shortcode('code', 'wrapCode');
