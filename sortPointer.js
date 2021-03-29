$(function () {
  var location = window.location.href;
  if (
    location == document.location.host ||
    location == document.location.protocol + '//' + document.location.host + '/' ||
    location == document.location.protocol + '//' + document.location.host
  ) {
    $('.sort:last a').append('*');
    $('.sort:last').addClass('active');
  } else {
    $('.sort a').each(function () {
      var link = this.href;
      if (location == link) {
        $(this).append('*');
        $(this).parent().addClass('active');
      }
    });
  }
});
