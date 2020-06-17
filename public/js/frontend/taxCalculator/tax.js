/* For ToolTip */
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
});

/* faq section*/
 $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });


  /* Emi calculator */
  