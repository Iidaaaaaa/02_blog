<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">

<?php if( is_home() || is_front_page() ): ?>
  <meta name="description" content="<?php bloginfo('description'); ?>">
<?php elseif( is_category() ): ?>
  <meta name="description" content="<?php echo category_description(); ?>"> <?php elseif( is_tag() ): ?>
  <meta name="description" content="<?php echo tag_description(); ?>">
<?php elseif( is_singular() ): ?>
  <meta name="description" content="<?php echo get_the_excerpt(); ?>">
<?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <?php get_template_part('ogp') ?>

    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/reset.css"/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Noto+Serif+JP:wght@200&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/style.css">

<?php wp_head(); ?>

</head>

<body <?php body_class('orignal_class'); ?>>
    <?php wp_body_open(); ?>

          <div class="loader" style="display: none;">
  <p class="txt">LOADING.....  </p>
</div>
<header>


    <div class="inner">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php echo esc_url(get_theme_file_uri('./image/title.png')); ?>" alt="title"> </a></h1>

        <div class="nav">

            <input id="drawer_input" class="drawer_hidden" type="checkbox">

            <!-- ハンバーガーアイコン -->
            <label for="drawer_input" class="drawer_open"><span></span></label>

            <!-- メニュー -->
            <nav class="nav_content">
              <ul class="nav_list">
                <li class="nav_item"><a  class="accent orange" href="index.html">Home</a></li>
                <li class="nav_item"><a class="mark" href="single.html">Blog</a></li>
                <li class="nav_item"><a href="#">Profile</a></li>
              </ul>
            </nav>

          </div>

        <ul class="submenu">
            <li class="orange"><a class="orange" href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
            <li><a class="mark" href="#blog">Blog</a></li>
            <li> <a href="#">Profile</a></li>
        </ul>

</div>

    </header>