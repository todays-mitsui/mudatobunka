<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="<?php the_description(); ?>">
<meta name="keywords" content="">
<meta content="website" property="og:type">
<meta content="<?php the_og_image(); ?>" property="og:image">
<meta content="<?php bloginfo('url');?>" property="og:url">
<meta content="<?php the_description(); ?>" property="og:description">
<meta content="ja_JP" property="og:locale">
<meta content="<?php bloginfo('name');?>" property="og:site_name">
<title><?php bloginfo('name');?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>
