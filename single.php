<?php get_header(); ?>
    <main>
<div class="inner">

    <div class="wrapper">
<section class="mainblog">
    <?php if (have_posts() ): ?>
<!-- もし、記事が1件以上あったら-->
<?php while (have_posts()):the_post(); ?>
<!-- 記事の表示条件で繰り返す（※個別投稿ページの場合は、1回）-->
    <article class="<?php post_class("entry"); ?>">
<h2 class="entry-title"> <?php the_title(); ?></h2>
 <!-- 記事のタイトル -->
  <div class="entry-meta">
    <ul >
      <li class="blogtime infodays"><?php the_time('Y.m.d');?> <!-- 記事の投稿日 --></li>
      <li class="infodays"><?php the_category( ',' ); ?> <!-- 記事のカテゴリー --></li>
    </ul>
  </div>
   <?php the_content( ); ?>
     <div class="entry-footer">
    <?php the_tags( '<span class="tag-links">', ', ', '</span>' ); ?>
    <!-- 記事のタグコンマ「,」で区切る -->

<!-- コメント開始 -->
<section class="comments">
  <?php comments_template(); ?>
</section>
<!-- コメント終了 -->
</section>
<?php get_sidebar(); ?>
                        </div>



<!-- 記事系 -->
<div class="nextblog">
  <?php
  $current_post = get_post(); // 現在の投稿を取得
  $args = array(
    'posts_per_page' => -1,
    'orderby' => 'date', // 日付順でソート
    'order' => 'DESC',   // 降順ソート（新しい記事が先頭に）
    'post_status' => 'publish',
  );
  $all_posts = get_posts($args);

  // 現在の投稿が含まれる配列内の位置を取得
  $current_index = array_search($current_post, $all_posts);

  $prev_post = null;
  $next_post = null;

  if ($current_index !== false) {
    // 前の記事を取得
    if (isset($all_posts[$current_index + 1])) {
      $prev_post = $all_posts[$current_index + 1];
    }
    // 次の記事を取得
    if (isset($all_posts[$current_index - 1])) {
      $next_post = $all_posts[$current_index - 1];
    }
  }
  ?>

  <!-- 前の記事 -->
  <div class="ago">
    <?php if ($prev_post): ?>
      <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-link">前の記事</a><br>
      <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-title"><?php echo get_the_title($prev_post->ID); ?></a><br>
      <?php if (has_post_thumbnail($prev_post->ID)): ?>
        <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-thumbnail">
          <?php echo get_the_post_thumbnail($prev_post->ID, 'thumbnail'); ?>
        </a>
      <?php else: ?>
        <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-thumbnail">
          <img src="<?php echo get_template_directory_uri() . '/image/thumbnail-default.jpg'; ?>" alt="デフォルトサムネイル">
        </a>
      <?php endif; ?>
    <?php else: ?>
      前の記事はありません
    <?php endif; ?>
  </div>
<a class="btn" href="<?php echo esc_url(home_url('/')); ?> #blog">ブログ一覧へ戻る</a>

  <!-- 次の記事 -->
  <div class="next">
    <?php if ($next_post): ?>
      <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-link">次の記事</a><br>
      <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-title"><?php echo get_the_title($next_post->ID); ?></a><br>
      <?php if (has_post_thumbnail($next_post->ID)): ?>
        <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-thumbnail">
          <?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail'); ?>
        </a>
      <?php else: ?>
        <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-thumbnail">
          <img src="<?php echo get_template_directory_uri() . '/image/thumbnail-default.jpg'; ?>" alt="デフォルトサムネイル">
        </a>
      <?php endif; ?>
    <?php else: ?>
      次の記事はありません
    <?php endif; ?>
  </div>
</div>




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
            <li><a href="https://twitter.com/iidaaaa__?s=20" target="_blank"><img  src="<?php echo esc_url(get_theme_file_uri('image/X.png')); ?>" alt="twitterlogo"></a></li>
            <li><a href="https://www.instagram.com/iidaaaaaaaa__/"target="_blank" ><img src="<?php echo esc_url(get_theme_file_uri('image/intstgramlogo.png')); ?>" alt="SNSlogo"></a></li>

            </ul>
    </article>
<?php endwhile; ?>
<!-- 繰り返し終了 -->

<?php endif; ?>
<!-- if文終了。-->
</section>

                        </div>


    </main>

<?php get_footer(); ?>
