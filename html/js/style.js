// ハンバーガーメニュー
$(function() {
    $('#navToggle').click(function(){
        $('header').toggleClass('openNav');
    });
});
// 戻るボタン
$(function() {
    var $pageTop = $(".pagetop")
    $pageTop.hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $pageTop.fadeIn();
        } else {
            $pageTop.fadeOut();
        }
    });
    $('a[href^="#"]').click(function() {
        var href = $(this).attr("href");
        var target = $(href == "#" || href =="" ? 'html' : href);
        var position = target.offset().top;
        $("html,body").animate({
            scrollTop: position
        }, 500, "swing");
        return false;
    });
});

// work page hover effect
$(".hover").mouseleave(
    function () {
        $(this).removeClass("hover");
    }
);

// モーダル実装(480px以上なら処理)
var windowWidth = $(window).width();
var windowSm = 480;
if (windowWidth > windowSm) {
  $('.js-btn-modal').on('click', function(){
  $('.overlay').fadeIn();
  var id = $(this).data('id');
  $('.js-modal[data-id="modal' + id + '"]').fadeIn();
});

$('.js-close-btn').on('click', function(){
  $('.overlay').fadeOut();
  $('.js-modal').fadeOut();
});
}
