$(document).ready(function() {
    $('.card__image').each(function() {
      var $img = $(this);
      $img.on('load', function() {
        var containerWidth = $img.parent().width();
        var containerHeight = $img.parent().height();

        var imgWidth = $img.width();
        var imgHeight = $img.height();

        if (imgWidth > containerWidth || imgHeight > containerHeight) {
          if (imgWidth / containerWidth > imgHeight / containerHeight) {
            $img.css('width', 'auto');
            $img.css('height', '100%');
          } else {
            $img.css('height', 'auto');
            $img.css('width', '100%');
          }
        }
      });
    });
  });
