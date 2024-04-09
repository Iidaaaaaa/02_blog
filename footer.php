
   <footer>
<p>@Copyright 2023 IIda</p>
</footer>
<a id="page-top" href="#"><p >Page Top</p></a>


</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
</script>
<script>
        // サイドバーのボタンのコード
            $(".accordionBtn").on("click",function(){
    $(".cat-item:nth-child(n+5)").slideToggle();
});


$(document).ready(function() {
    // ボタンがクリックされたときの処理
    $(".accordionBtn").click(function() {
        var buttonText = $(this).text(); // ボタンのテキストを取得
        if (buttonText === "More") {
            $(this).text("Less"); // ボタンのテキストを"Less"に変更
        } else {
            $(this).text("More"); // ボタンのテキストを"More"に変更
        }
    });
});

// ページトップに戻るコード
// #page-topをクリックした際の設定
$('#page-top').click(function () {
    $('body,html').animate({
        scrollTop: 0//ページトップまでスクロール
    }, 900);//ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false;//リンク自体の無効化
});
    </script>

    <!-- jQueryを使うのであれば、最初に読み込む -->

    <!-- jsファイルはここに読み込む -->

    <?php wp_footer(); ?>
</body>

</html>