"use strict";

jQuery(function ($) {
  // この中であればWordPressでも「$」が使用可能になる

  // スクロールするとヘッダー背景色変更
  var header = $('.header');
  var headerHeight = $('.header').height();
  var height = $('.fv').height();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      header.addClass('is-color');
    } else {
      header.removeClass('is-color');
    }
  });

  // ハンバーガーメニューのクリックイベント
  $(".js-hamburger").click(function () {
    $(this).toggleClass("is-active");
    $(".js-sp-nav").toggleClass("is-active");
    $(".header__logoLink").toggleClass("is-active");
    $('body').toggleClass("is-active");
  });

  // GSAP アニメーション 1
  var fadeIns = document.querySelectorAll('.js-fadeIn');
  fadeIns.forEach(function (fadeIn) {
    gsap.fromTo(fadeIn.querySelector('span'), {
      yPercent: 100
    }, {
      yPercent: 0,
      duration: 1,
      ease: Power3.easeOut,
      scrollTrigger: {
        trigger: fadeIn,
        start: "top bottom"
      }
    });
  });

  // GSAP アニメーション 2
  var fadeIns2 = document.querySelectorAll('.js-fadeIn2');
  fadeIns2.forEach(function (fadeIn2) {
    gsap.fromTo(fadeIn2, {
      y: 30,
      opacity: 0
    }, {
      y: 0,
      opacity: 1,
      duration: 1,
      ease: Power2.easeOut,
      scrollTrigger: {
        trigger: fadeIn2,
        start: "top bottom"
      }
    });
  });

  // 別ページへのアンカーリンク
  var headH = $("header").outerHeight();
  var animeSpeed = 500;
  var urlHash = location.hash; // URLのハッシュタグを取得

  if (urlHash) {
    // ハッシュタグが有る場合
    $("body,html").scrollTop(0);
    setTimeout(function () {
      // 無くてもいいが有ると動作が安定する
      var target = $(urlHash);
      var position = target.offset().top - headH;
      $("body,html").stop().animate({
        scrollTop: position
      }, animeSpeed);
    }, 0);
  }

  // アコーディオン
  $('.jsAccordionTitle').on('click', function () {
    $(this).next().slideToggle();
    $(this).toggleClass('is-active', '300');
  });
});