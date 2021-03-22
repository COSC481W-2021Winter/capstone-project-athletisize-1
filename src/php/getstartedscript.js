$(document).ready(function() {
  $("#getstarted").click(function() {
    $("#updateModal").modal();
  });
  $('.editable ul').on('click', 'li', function() {
    if ($(this).hasClass('li_selected')) {
      $(this).removeClass('li_selected');
    } else {
      $(this).addClass('li_selected');
    }
  });
});