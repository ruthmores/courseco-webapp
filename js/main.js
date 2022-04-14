/* ---------- Preloader ------------------------ */

$(window).on("load", function () {
  $(".preloader").fadeOut("slow");
});

$(document).ready(function () {
  /* ---------- Navbar Shrink ------------------------ */
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 90) {
      $(".navbar").addClass("navbar-shrink");
    } else {
      $(".navbar").removeClass("navbar-shrink");
    }
  });
  /* ---------- Video Popup ------------------------ */
  const videoSrc = $("#player-1").attr("src");
  $(".video-play-btn, .video-popup").on("click", function () {
    if ($(".video-popup").hasClass("open")) {
      $(".video-popup").removeClass("open");
      $("#player-1").attr("src", "");
    } else {
      $(".video-popup").addClass("open");
      if ($("#player-1").attr("src") == "") {
        $("#player-1").attr("src", videoSrc);
      }
    }
  });

  /* ---------- Features Carousel ------------------------ */
  $(".features-carousel").owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  /* ---------- Screenshots Carousel ------------------------ */
  $(".screenshots-carousel").owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  /* ---------- Testimonials Carousel ------------------------ */
  $(".testimonials-carousel").owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  /* ---------- Team Carousel ------------------------ */
  $(".team-carousel").owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  /* ---------- Page Scrolling ' Scrollit ------------------------ */

  $.scrollIt({
    topOffset: -50,
  });

  /* ---------- Page Scrolling ' Scrollit ------------------------ */
  $(".nav-link").on("click", function () {
    $(".navbar-collapse").collapse("hide");
  });

  /* ---------- Toggle Theme - Light & Dark Mode ------------------------ */
  function toggleTheme() {
    if (localStorage.getItem("shala-theme") !== null) {
      if (localStorage.getItem("shala-theme") === "dark") {
        $("body").addClass("dark");
      } else $("body").removeClass("dark");
    }
    updateIcon();
  }
  toggleTheme();

  $(".toggle-theme").on("click", function () {
    $("body").toggleClass("dark");
    if ($("body").hasClass("dark")) {
      localStorage.setItem("shala-theme", "dark");
    } else {
      localStorage.setItem("shala-theme", "light");
    }
    updateIcon();
  });

  function updateIcon() {
    if ($("body").hasClass("dark")) {
      $(".toggle-theme i").removeClass("fa-moon");
      $(".toggle-theme i").addClass("fa-sun");
    } else {
      $(".toggle-theme i").removeClass("fa-sun");
      $(".toggle-theme i").addClass("fa-moon");
    }
  }
});

//jquery for toggle dropdown menus
$(document).ready(function(){
  //toggle sub-menus
  $(".sub-btn").click(function(){
    $(this).next(".sub-menu").slideToggle();
  });

  //toggle more-menus
  // $(".more-btn").click(function(){
  //   $(this).next(".more-menu").slideToggle();
  // });
});

// //javascript for the responsive navigation menu
var menu = document.querySelector(".menu");
var menuBtn = document.querySelector(".menu-btn");
var closeBtn = document.querySelector(".close-btn");

menuBtn.addEventListener("click", () => {
  menu.classList.add("active");
});

closeBtn.addEventListener("click", () => {
  menu.classList.remove("active");
});

// // //javascript for the navigation bar effects on scroll
window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});
