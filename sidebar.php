                   <section class="category-all">
                            <h3>Category</h3>
<!--カテゴリー一覧-->

<ul class="include-accordion scroll-control">
  <li>

    <ul class="tag" id="category-list">
<?php
  $args = array(
    'title_li' => '',
    'depth'=> 1,
    'show_count' => 0,
    );

wp_list_categories($args); ?>
    <button class="accordionBtn button-more" type="button">More</button>

</ul>
  </li>
</ul>

<article class="share">
                                <h3>Share</h3>
<div class="logo">
    <a href="https://twitter.com/intent/tweet?text=%E9%A3%AF%E7%94%B0%E3%81%95%E3%82%93%E3%81%AE%E3%82%B5%E3%82%A4%E3%83%88%E3%81%8C%E3%81%99%E3%81%94%E3%81%84%EF%BC%81%0Ahttp%3A//iidaaa.secret.jp/blog" target="_blank">
        <dl>
            <dt><img src="<?php echo esc_url(get_theme_file_uri('image/X.png')); ?>" alt="twitterlogo"></dt>
            <dd class="link">X</dd>
        </dl>


    </a>
</div>
<div class="logo">
    <a href="https://www.instagram.com/iidaaaaaaaa__" target="_blank">
        <dl>
            <dt><img src="<?php echo esc_url(get_theme_file_uri('image/instagramlogo.png')); ?>" alt="SNSlogo"></dt>
            <dd class="link">Instagram</dd>
        </dl>
    </a>
</div>

<div class="logo buttonlogo">
    <button class="copy" onclick="copyUrl()"><img src="<?php echo esc_url(get_theme_file_uri('image/URL.png')); ?>" alt="URL"><p class="link">Copy URL</p></button>
</div>


</article>
                    </section>