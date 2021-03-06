<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi" />
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>
<div id="page">
    <div id="navigation">
        <ul>
        <li <?php if (is_home()): ?>class="current_page_item"<?php endif; ?>><a href="<?php bloginfo('url'); ?>" title="Home">Home</a></li>
        <?php wp_list_pages('title_li=&depth=0&sort_column=menu_order'); ?>
        </ul>
    </div>
    <div id="header">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <p id="description" style="color:#ccc; font-size:0.8em;font-weight:bold;"><?php bloginfo('description'); ?></p>
        <?php dynamic_sidebar('Index Description'); ?>
    </div>
