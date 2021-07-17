$(document).ready(function () {
  const urlParams = new URLSearchParams(window.location.search);
  const module = urlParams.get('module');
  $('.selectedNav').removeClass('selectedNav')
  $(`.${module}`).addClass('selectedNav')
});