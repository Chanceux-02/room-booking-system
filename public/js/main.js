$(window).scroll(function() {
    var scrollPosition = $(window).scrollTop();

    // Perform actions based on scroll position
    if (scrollPosition > 100) {
        $('#_nav').removeClass('_nav');
        $('#_nav').addClass('_nav2');
    }else{
        $('#_nav').removeClass('_nav2');
        $('#_nav').addClass('_nav');
    }
  });

  $('#toggle-btn').click(function(){
    let test = $('#_header-text').toggle();
  });
  