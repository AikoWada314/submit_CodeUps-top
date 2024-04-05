
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  // スクロールトップ
  var topBtn = $('.to-top');
  topBtn.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 90) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });

// ヘッダークラス名付与
let header = $('.header');
let headerHeight = $('.header').height();
let height = $('.fv').height();
$(window).scroll(function () {
  if ($(this).scrollTop() > (height - headerHeight)) {
    header.addClass('is-color');

  } else {
    // 画面が指定pxより上ならボタンを非表示
    header.removeClass('is-color');
  }
});


//ドロワーメニュー
$(".js-hamburger").click(function () {
  $(".js-sp-nav").toggleClass("is-active");
  function toggleBodyScroll() {
    if ($("body").css("overflow") === "hidden") {
      $("body").css({
        height: "",
        overflow: ""
      });
    } else {
      $("body").css({
        height: "100%",
        overflow: "hidden"
      });
    }
  }

});

$(function () {
  // ハンバーガーメニュー
  $(".js-hamburger").click(function () {
    $(this).toggleClass("is-active");
    toggleBodyScroll();
  });
});

// bodyのスクロール設定を切り替える関数
function toggleBodyScroll() {
  if ($("body").css("overflow") === "hidden") {
    $("body").css({
      height: "",
      overflow: ""
    });
  } else {
    $("body").css({
      height: "100%",
      overflow: "hidden"
    });
  }
}

// FVスライダー
const swiper = new Swiper(".swiper-container1", {
  loop: true,
  effect: "fade",
  speed: 3000,
  allowTouchMove: false,
  autoplay: {
    delay: 3000,
  },
});

// Campaignスライダー
const swiper2 = new Swiper(".swiper-container2", {
  loop:true, 
  slidesPerView: "auto",
  autoplay: { delay: 2000, },
  spaceBetween: 24,
  breakpoints: {
    768: {
      spaceBetween: 30,
    },
    1024: {
      spaceBetween: 40,
    },
  },
  centeredSlides: false, 
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


//要素の取得とスピードの設定
var box = $('.js-inview'),
    speed = 700;  
 
//.js-inviewの付いた全ての要素に対して下記の処理を行う
box.each(function(){
    $(this).append('<div class="color"></div>')
    var color = $(this).find($('.color')),
    image = $(this).find('img');
    var counter = 0;
 
    image.css('opacity','0');
    color.css('width','0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function(){
        if(counter == 0){
　　　　　$(this).delay(200).animate({'width':'100%'},speed,function(){
                   image.css('opacity','1');
                   $(this).css({'left':'0' , 'right':'auto'});
                   $(this).animate({'width':'0%'},speed);
                })
            counter = 1;
          }
     });
});

});
