jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  // ハンバーガーメニューのクリックイベント
  $(".js-hamburger").click(function () {
    $(this).toggleClass("is-active");
    $(".js-sp-nav").toggleClass("is-active");
    $(".header__logoLink").toggleClass("is-active");
    $('body').toggleClass("is-active");
  });

  // Membersスライダー
  const swiper = new Swiper(".js-swiper", {
    loop: true, 
    slidesPerView: "1.4",
    autoplay: { delay: 2000, },
    spaceBetween: 10,
    centeredSlides: false, 
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      641: {
        slidesPerView: "4.5",
      }
    },
  });

  // アコーディオン
  $('.jsAccordionTitle').on('click', function () {
    $(this).next().slideToggle();
    $(this).toggleClass('is-active', '300');
  });


    // サービスページスライダー
    const service_swiper = new Swiper(".js-service-swiper", {
      loop: true, 
      slidesPerView: "1.16",
      autoplay: { delay: 2000, },
      spaceBetween: 10,
      centeredSlides: true, 
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        641: {
          slidesPerView: "3.5",
        }
      },
    });

  // ふわっとアニメーション（GSAP）
  let fadeIns = document.querySelectorAll('.js-fadeIn');
  fadeIns.forEach((fadeIn) => {
    gsap.fromTo(
      fadeIn,
      {
        y: 30,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: 1,
        ease: Power2.easeOut,
        scrollTrigger: {
          trigger: fadeIn,
          start: "top bottom",
        }
      }
    );
  });
});
