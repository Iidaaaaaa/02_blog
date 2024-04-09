<?php get_header(); ?>
<main>

    <div class="headline headinner">
        <ul class="headline-mask">
            <li class="headline-item"><img class="headlineimg" src="<?php echo esc_url(get_theme_file_uri('image/headline.JPG')); ?>" alt="headline" width="1700" height="auto"></li>
            <li class="headline-item"><img class="headlineimg" src="<?php echo esc_url(get_theme_file_uri('image/headline2.jpg')); ?>" alt="headline" width="1700" height="auto"></li>
            <li class="headline-item"><img class="headlineimg" src="<?php echo esc_url(get_theme_file_uri('image/headline3.jpg')); ?>" alt="headline" width="1700" height="auto"></li>
        </ul>

        <ul class="headline-mask">
            <li class="headline-item"><img class="headlineimg" src="<?php echo esc_url(get_theme_file_uri('image/headline.JPG')); ?>" alt="headline" width="1700" height="auto"></li>
            <li class="headline-item"><img class="headlineimg" src="<?php echo esc_url(get_theme_file_uri('image/headline2.jpg')); ?>" alt="headline" width="1700" height="auto"></li>
            <li class="headline-item"><img class="headlineimg" src="<?php echo esc_url(get_theme_file_uri('image/headline3.jpg')); ?>" alt="headline" width="1700" height="auto"></li>
        </ul>

    </div>
    <div class="inner">



        <a name="blog">
            <h2>Blog</h2>
        </a>
        <div class="wrapper">
            <section class="blog-al">
                <?php if (have_posts()) : //もし1件以上記事があったら 
                ?>

                    <?php while (have_posts()) : //記事がある間は繰り返す
                        the_post(); //次の記事のデータをセットする
                    ?>
                        <!--1記事め開始-->
                        <article id="post-<?php the_ID(); ?>" <?php post_class("one"); ?>>
                            <a class="circle" href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?> <!-- もしアイキャッチ画像があるのであれば、 -->
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                <?php else : ?> <!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                                    <img class="thumb" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
                                <?php endif; ?>
                                <div class="text">

                                    <h4><?php echo wp_trim_words(get_the_title(), 40, '…'); ?></h4>
                                    <p>
                                        <?php echo wp_trim_words(get_the_content(), 70, '...'); ?>
                                    </p>

                                    <p class="time"> <time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time></p>

                                </div>
                            </a>
                        </article>
                        <!--1記事め終了-->
                    <?php endwhile; //ループ終了
                    ?>
                <?php else : //もし、表示すべき記事がなかったら 
                ?>
                    <p>まだ記事はありません。</p>
                <?php endif; //条件分岐終了 
                ?>

            </section>
            <?php get_sidebar(); ?>
        </div>

        <a class="btn" href="<?php echo esc_url(home_url('/')); ?> #blog">ブログ一覧へ</a>

        <section class="profile">
            <article>
                <h3>Profile</h3>
                <img class="icon" src="<?php echo esc_url(get_theme_file_uri('image/profileicon.JPG')); ?>" alt="profile">
                <div class="text">
                    <p>トライデントコンピュータ専門学校<br>
                        Webデザイン学科１年。車でいろんな場所に<br>
                        行くのが趣味。</p>
                </div>
                <ul class="sns">
                    <li><a href="https://twitter.com/iidaaaa__?s=20"><img src="<?php echo esc_url(get_theme_file_uri('image/X.png')); ?>" alt="twitter"></a></li>
                    <li><a href="https://www.instagram.com/iidaaaaaaaa__/"><img src="<?php echo esc_url(get_theme_file_uri('image/instagramlogo.png')); ?>" alt="SNSlogo"></a></li>
                </ul>
            </article>
        </section>
    </div>

</main>
<?php get_footer(); ?>