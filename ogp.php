<!-- OGP -->
<meta property="og:title" content="Iida's Blog">
<meta property="og:type" content="website">
<meta property="og:url" content="公開時に記入します。">
<meta property="og:description" content="飯田さんのWeb制作記録です" />
<meta property="og:image" content="<?php echo esc_url(get_theme_file_uri()); ?>/image/ogp.jpg">



<!-- パーマリンクが入ります。-->
<?php if( is_home() || is_front_page() ): ?>
<meta property="og:url" content="<?php echo home_url(); ?>" />
<?php elseif( is_singular() || is_page() || is_category() ): ?>
<meta property="og:url" content="<?php echo get_permalink(); ?>" />
<?php endif; ?>

<!-- ここは、descriptionのnameを書き換えるだけです。 -->
<?php if( is_home() || is_front_page()): ?>
<meta name="og:description" content="<?php bloginfo('description'); ?>">
<?php elseif( is_category() ): ?>
<meta name="og:description" content="<?php echo category_description(); ?>">
<?php elseif( is_tag() ): ?>
<meta name="og:description" content="<?php echo tag_description(); ?>">
<?php elseif( is_singular() ): ?>
<meta name="og:description" content="<?php echo get_the_excerpt(); ?>">
<?php endif; ?>

<!-- OGP画像へのパスを書きます。-->
<?php if (has_post_thumbnail()) : ?>
<meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
<?php else: ?>
<meta property="og:image" content="<?php echo esc_url(get_theme_file_uri()); ?>/image/ogp.jpg" />
<?php endif; ?>

<!-- ファビコンを設定する場合は、favicon.ico をルートディレクトリ置くだけで設定できます。 -->
<link rel="icon" href="<?php echo esc_url(get_theme_file_uri()); ?>/favicon.ico" />

<!-- Twitter cardを設定しても構いません -->
<meta name="twitter:card" content="summary">
<meta name=”twitter:description” content=”飯田さんのWeb制作記録です” />
<meta name=”twitter:image” content="/Users/it232010/Documents/htdocs/blog/wp-content/themes/02_blog/screenshot.png">