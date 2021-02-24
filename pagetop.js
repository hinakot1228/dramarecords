$(function() {
    var topBtn = $('#page-top');
    // 元々は見えないようにしておく
    topBtn.hide();

    // スクロールしたらボタンを表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });

    // スクロールでトップへ戻る
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});