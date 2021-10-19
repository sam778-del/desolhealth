/*** TABLE OF CONTENTS
======================================================
    0 / general
    1 / menu toggle
    2 / call the Owl initializer functions
    3 / call the slick functions
    4 / all the  feather icons function
    5 /  call  AOS function
    6 / call  Lazy function
    7 /  call  Typed function
    8 /  call  StickySidebar function
    =================================================== ***/
$(function () {
    ("use strict");
    // ============================= 1/ menu toggle
    $(".menu-toggle-icon").on("click", function () {
        $(".mobile-overlay").addClass("mobile-visible");
    });
    $(".mobile-overlay-bg , .close-mobile-menu").on("click", function () {
        $(".mobile-overlay").removeClass("mobile-visible");
    });

    // =================
    $('.has-dropdown-m').click(function(e) {
        e.preventDefault();
    
      let $this = $(this);
    
      if ($this.next().hasClass('show')) {
          $this.next().removeClass('show');
          $this.next().slideUp(350);
      } else {
          $this.parent().parent().find('li .dropdown-mobile').removeClass('show');
          $this.parent().parent().find('li .dropdown-mobile').slideUp(350);
          $this.next().toggleClass('show');
          $this.next().slideToggle(350);
      }
  });

    // $(".has-dropdown-m").on("click", function (e) {
    //    $(".dropdown-mobile").slideToggle();
    //     $(this).toggleClass("color-secondary");

    // });

});

