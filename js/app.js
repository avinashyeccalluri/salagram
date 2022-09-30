(function ($) {
  $(function () {
    AOS.init();

    //  open and close nav
    $("#navbar-toggle").click(function () {
      $("nav ul").slideToggle();
    });

    // Hamburger toggle
    $("#navbar-toggle").on("click", function () {
      this.classList.toggle("active");
    });

    // If a link has a dropdown, add sub menu toggle.
    $("nav ul li a:not(:only-child)").click(function (e) {
      $(this).siblings(".navbar-dropdown").slideToggle("slow");

      // Close dropdown when select another dropdown
      $(".navbar-dropdown").not($(this).siblings()).hide("slow");
      e.stopPropagation();
    });

    // Click outside the dropdown will remove the dropdown class
    $("html").click(function () {
      $(".navbar-dropdown").hide();
    });

    $(document).on("click", ".steel-power", function (e) {
      var type = $(this).attr("type");
      if (type == "steel") {
        $("#steel").show();
        $("#power").hide();
      } else {
        $("#steel").hide();
        $("#power").show();
      }
    });
  });
})(jQuery);

const splide = new Splide(".splide", {
  type: "loop",
  drag: "free",
  focus: "center",
  // rewind : true,
  // autoStart : true,
  perPage: 4,
  breakpoints: {
    1024: {
      perPage: 4,
    },
    767: {
      perPage: 2,
    },
    640: {
      perPage: 1,
    },
  },
  autoScroll: {
    speed: 3,
    pauseOnHover: false,
    direction: "ltr",
  },
});

splide.mount();
