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
      <li class="blogtime infodays"><?php the_time('F jS, Y ');?> <!-- 記事の投稿日 --></li>
      <li class="infodays"><?php the_category( ',' ); ?> <!-- 記事のカテゴリー --></li>
      <li class="infodays"><?php the_author(); ?> <!-- 記事の投稿者 --></li>
    </ul>
  </div>
   <?php the_content( ); ?>
     <div class="entry-footer">
    <?php the_tags( '<span class="tag-links">', ', ', '</span>' ); ?>
    <!-- 記事のタグコンマ「,」で区切る -->

        <div class="comment">
            <h3>Comment</h3>
            <form action="#" method="post">
                <label for="name">Name</label>
              <input id="name" type="text"><br>
              <label for="mail">Email</label>
                <input  id="mail" type="email"><br>
                <label class="text-com" for="com">Text</label><br>
                <input  id="com" type="text"><br>
                <input type="submit" value="送信"><br>
            </form>
        </div>
        <!-- コメント開始 -->
<section class="comments">
  <?php comments_template(); ?>
</section>
<!-- コメント終了 -->
<!-- 前後のナビゲーション開始-->

<!-- 前後のナビゲーション終了 -->

</section>

<?php get_sidebar(); ?>
                        </div>
<ul class="nextblog">
  <li class="ago"><?php previous_post_link('前の記事 %link', '%title'); ?></li>
  <li class="btn"> <a href="index.html">ブログ一覧へ戻る</a></li>
  <li class="next"><?php next_post_link('%link 次の記事', '%title'); ?></li>
</ul>
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
            <li><a href="https://twitter.com/iidaaaa__?s=20" target="_blank"><img  src="<?php echo esc_url(get_theme_file_uri('image/X.png')); ?>" alt="x"></a></li>
            <li><a href="https://www.instagram.com/iidaaaaaaaa__/"target="_blank" ><img src="<?php echo esc_url(get_theme_file_uri('image/intstgramlogo.png')); ?>" alt="instagram"></a></li>

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

    <script src="js/jquery-3.7.0.js"></script>
    <!-- jQueryを使うのであれば、最初に読み込む -->
    <script src="js\script.js">
    </script>
    <!-- jsファイルはここに読み込む -->
</body>

</html>