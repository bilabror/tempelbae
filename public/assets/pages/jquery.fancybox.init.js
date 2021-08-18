/**
 * Theme: Frogetor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Fancybox Js
 */

$('.fancybox').fancybox();

$('[data-fancybox="images"]').fancybox({
    buttons : [ 
      'slideShow',
      'share',
      'zoom',
      'fullScreen',
      'close'
    ],
    thumbs : {
      autoStart : true
    }
  });

  $('[data-fancybox]').fancybox({
    youtube : {
        controls : 0,
        showinfo : 0
    },
    vimeo : {
        color : 'f00'
    }
});