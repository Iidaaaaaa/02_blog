<?php
function add_my_scripts() {

    //オリジナルJavaScriptを</body>前に読み込み
    wp_enqueue_script('myscript',get_theme_file_uri( 'js/script.js' ),
    array(),'',true);

        wp_enqueue_script('myscript',get_theme_file_uri( 'https://code.jquery.com/jquery-3.7.1.min.js' ),
    array(),'',true);
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

function my_theme_setup() {
  //アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');

    //追記
  //heade内にフィードリンクを出力
  add_theme_support('automatic-feed-links');

    //自動でtitleタグ挿入
  add_theme_support( 'title-tag' );

    // 固定ページで「抜粋」を有効化
  add_post_type_support('page', 'excerpt');

  // カテゴリーとタグのmeta descriptionからpタグを除去
  remove_filter('term_description','wpautop');
}
add_action( 'after_setup_theme', 'my_theme_setup');


//コメント//
function motoki_comment_field_custom( $fields ) {
  $comment_field = '<p class="comment-form-comment"><label for="comment"><span class="required"></span></label><textarea id="com" name="comment" cols="45" rows="10" maxlength="65525" required="" placeholder="Text"></textarea></p>';
  unset( $fields['comment'] );
  $fields['comment'] = $comment_field;
  $fields['author'] = '<p class="comment-form-author"><label for="author"></label><input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" placeholder="Name"></p>';
  $fields['url'] = '';
  $fields['email'] = '<p class="comment-form-author"><label for="author"></label><input id="author" name="author" type="email" value="" size="30" maxlength="245" autocomplete="name" placeholder="Email"></p>';

  return $fields;
}
add_filter( 'comment_form_fields', 'motoki_comment_field_custom');

// 「メールアドレスが公開されることはありません。 * が付いている欄は必須項目です」の文言を削除
add_filter( "comment_form_defaults", "my_comment_notes_before");
function my_comment_notes_before( $defaults){
$defaults['comment_notes_before'] = '';
return $defaults;
}



  function admin_custom_posttype_order($wp_query) {
    if( is_admin() ) {
        $post_type = $wp_query->query['post_type'];
        if($post_type == '投稿タイプの名前') {
        $wp_query->set('orderby','date'); //並べ替えの基準(日付)
        $wp_query->set('order','DESC'); //新しい順。古い順にしたい場合はASCを指定
        }
     }
    }
    add_filter('pre_get_posts', 'admin_custom_posttype_order');

    // ウィジェットの有効化
function theme_widgets_init(){
  register_sidebar(array(
     'name'=>'ソーシャルボタン',
     'id'=>'share-arear',
  ));
}
add_action('widgets_init','theme_widgets_init');