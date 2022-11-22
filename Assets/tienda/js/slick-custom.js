(() => {
  "use strict";
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e){
    var nameTab = $(e.target).attr('href');
    $(nameTab).find('.slick2').slick('reinit');
  });
});