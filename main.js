$(window).on('load', function() {
  $(window).scroll(function() {
    $('.form-group, .form-check').each(function() {
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass('visible');
      }
    });
  });
});
