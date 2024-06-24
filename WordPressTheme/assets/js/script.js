"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

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
  var header = $('.header');
  var headerHeight = $('.header').height();
  var height = $('.fv').height();
  $(window).scroll(function () {
    if ($(this).scrollTop() > height - headerHeight) {
      header.addClass('is-color');
    } else {
      // 画面が指定pxより上ならボタンを非表示
      header.removeClass('is-color');
    }
  });
  console.log("test");

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
    $(".sp-nav__child").click(function () {
      $(".js-sp-nav").removeClass("is-active");
      $(".js-hamburger").removeClass("is-active");
    });
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
  var swiper = new Swiper(".js-fv-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000
    }
  });

  // Campaignスライダー
  var swiper2 = new Swiper(".js-campaign-swiper", {
    loop: true,
    slidesPerView: "auto",
    autoplay: {
      delay: 2000
    },
    spaceBetween: 24,
    breakpoints: {
      768: {
        spaceBetween: 30
      },
      1024: {
        spaceBetween: 40
      }
    },
    centeredSlides: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  //要素の取得とスピードの設定
  var box = $('.js-inview'),
    speed = 700;

  //.js-inviewの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($('.color')),
      image = $(this).find('img');
    var counter = 0;
    image.css('opacity', '0');
    color.css('width', '0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          'width': '100%'
        }, speed, function () {
          image.css('opacity', '1');
          $(this).css({
            'left': '0',
            'right': 'auto'
          });
          $(this).animate({
            'width': '0%'
          }, speed);
        });
        counter = 1;
      }
    });
  });

  // モーダル
  // 変数に要素を入れる
  var trigger = $('.js-modal'),
    wrapper = $('.modal__wrapper'),
    layer = $('.modal__layer'),
    container = $('.modal__container'),
    close = $('.modal__close'),
    content = $('.modal__content');

  // 『モーダルを開くボタン』をクリックしたら、『モーダル本体』を表示
  $(trigger).click(function () {
    $(wrapper).fadeIn(400).css('z-index', 6000);

    // クリックした画像のHTML要素を取得して、置き換える
    $(content).html($(this).prop('outerHTML'));

    // 画像に object-fit: contain を適用
    $(content).find('img').css('object-fit', 'contain');
    $(content).find('img').css('height', 'calc(100vh - 40px)');

    // .modal__image に height: calc(100% - 40px); を適用
    $(content).find('.modal__image--ar').css('height', 'calc(100vh - 40px)');

    // スクロール位置を戻す
    $(container).scrollTop(0);

    // サイトのスクロールを禁止にする
    $('html, body').css('overflow', 'hidden');
  });

  // 『背景』と『モーダルを閉じるボタン』をクリックしたら、『モーダル本体』を非表示
  $(layer).add(close).click(function () {
    $(wrapper).fadeOut(400);

    // サイトのスクロール禁止を解除する
    $('html, body').removeAttr('style');
  });

  // Information Tab
  // タブ切り替え
  $(function () {
    $('.js-info-tab').on('click', function () {
      var idx = $('.js-info-tab').index(this);
      $(this).addClass('active').siblings('.js-info-tab').removeClass('active');
      $(this).closest('.info-tab__items').next('.info-tab__panel-area').find('.info-tab__panel').removeClass('active');
      $('.info-tab__panel').eq(idx).addClass('active');
    });
  });

  // Informationタブへダイレクトリンク
  $(window).on("hashchange", function () {
    scrollToSection();
    activateTabFromHash();
  });
  function activateTabFromHash() {
    var hash = window.location.hash; // 現在のハッシュを取得
    var index = getIndexFromHash(hash);
    console.log("ハッシュ", hash);
    $(".js-info-tab").removeClass("active");
    $(".info-tab__panel").removeClass("active");
    if (hash) {
      $("#info-tab-" + hash.replace("#", "")).addClass("active");
      $(hash).addClass("active");
      var contentId = hash.replace("#info-tab-", "#");
      $(contentId).addClass("active");
      showCategory(index);
    } else {
      $(".js-info-tab:first").addClass("active");
      $(".info-tab__panel:first").addClass("active");
    }
  }
  $(window).on("load", function () {
    var hash = window.location.hash;
    var index = getIndexFromHash(hash);
    if (hash) {
      scrollToSection();
    }
  });
  $(".info-tab__panel:first-of-type").css("display", "block");
  var hash = window.location.hash;
  var index = getIndexFromHash(hash);
  showCategory(index);
  $(".js-info-tab").on("click", function () {
    var index = $(this).index();
    showCategory(index);
  });
  function showCategory(index) {
    $(".js-info-tab").removeClass("active");
    $(".js-info-tab").eq(index).addClass("active");
    $(".info-tab__panel").hide().eq(index).fadeIn(300);
  }
  function getIndexFromHash(hash) {
    var defaultIndex = 0;
    if (!hash.startsWith("#info-tab-")) {
      return defaultIndex;
    }
    var index = parseInt(hash.replace("#info-tab-", ""), 10) - 1;
    if (isNaN(index) || index < 0 || index >= $(".js-info-tab").length) {
      return defaultIndex;
    }
    return index;
  }
  $('a[href^="#"]').click(function () {
    var speed = 600;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    $("html, body").animate({
      scrollTop: target.offset().top
    }, speed);
    return false;
  });
  function scrollToSection() {
    var headerHeight = $(".header").height();
    console.log("Header height:", headerHeight); // ヘッダーの高さをログに出力

    var target = $(".js-info-tab");
    console.log("Target Element:", target); // 対象の要素をログに出力

    var targetTop = target.offset().top;
    console.log("Target Top:", targetTop); // 対象の要素の上端の位置をログに出力

    var position = targetTop - headerHeight;
    console.log("Scroll Position:", position); // スクロールする位置をログに出力

    $("body,html").animate({
      scrollTop: position
    }, 500, "swing", function () {
      console.log("Animation completed."); // アニメーション完了後にログを出力
    });
  }

  // FAQ アコーディオン
  // アコーディオン
  $(function () {
    $('.jsAccordionTitle').on('click', function () {
      $(this).next().slideToggle();
      $(this).toggleClass('is-active', 300);
    });
  });

  // Blog　アーカイブ　アコーディオン
  var archiveButton = $(".js-archive-button");
  archiveButton.eq(0).addClass("is-active");
  // 初期表示　is-activeの次の要素を表示する
  var archiveButtonActive = $(".js-archive-button.is-active");
  archiveButtonActive.next().css({
    display: "block"
  });
  // ボタンをクリックしたらアコーディオンする
  archiveButton.on("click", function () {
    $(this).toggleClass("is-active");
    $(this).next().slideToggle(300);
  });

  // Contactフォーム制御
  $(function () {
    $(".js-contact-form").on("submit", function (event) {
      // フォームのデフォルトの送信をキャンセル
      event.preventDefault();

      // 入力された値を取得
      var name = $(this).find('input[name="name"]').val();
      var email = $(this).find('input[name="email"]').val();
      var tel = $(this).find('input[name="tel"]').val();
      var privacyChecked = $(this).find('input[name="privacy-policy"]').is(":checked");

      // 必須項目が未入力の場合はエラーメッセージを表示
      if (name === "" || email === "" || tel === "" || !privacyChecked) {
        $(this).find('input[name="name"]').toggleClass("is-error", name === "");
        $(this).find('input[name="email"]').toggleClass("is-error", email === "");
        $(this).find('input[name="tel"]').toggleClass("is-error", tel === "");
        $(this).find('input[name="privacy-policy"]').toggleClass("is-error", !privacyChecked);

        // エラーメッセージを表示する
        $(".page-contact__error-message").css("display", "block");
      } else {
        // フォームが正常に入力されている場合は、ここにフォームの送信処理を追加する
        // 例えば、このフォームがAjaxを使用してサーバーに送信される場合は、そのコードをここに追加する
        // この例では、フォームが正常に送信されるとメッセージをログに表示するだけです
        console.log("Form submitted successfully!");
      }
    });
  });

  // コンタクトフォーム
  jQuery(function ($) {
    //バリデーション対策
    //formタグにクラス追加
    $(".wpcf7-form").addClass("hide_error_message");

    //送信または確認ボタンをクリックしたとき
    $(".wpcf7-confirm, .wpcf7-submit").click(function () {
      //formからクラスを削除
      $(".wpcf7-form").removeClass("hide_error_message");
    });

    // Contact Form 7 プルダウンのカラー変更
    $('select option:first-child').addClass('p-formSelect__default');
    $('select').on('change', function () {
      var itemSelect = $(this).find('option:selected').hasClass('p-formSelect__default');
      $(this).parents('.wpcf7-form-control-wrap').toggleClass('p-formSelect--selected', !itemSelect);
    });
  });
});