$(document).ready(function() {
  
  $('.entry-content').each(function() {
      $(this).children('p').first().addClass('first-paragraph');
  });

  $('[data-toggle=offcanvas]').click(function(e) {
    e.preventDefault();
    var globololol = $('#global');
    globololol.toggleClass('active');
    if (globololol.hasClass('active')) {
      $('.menu-icon').animate({'left': '17em'}, 200);      
    } else {
      $('.menu-icon').animate({'left': '1em'}, 200);
    }
  });

});
