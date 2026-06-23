$(function () {

  // Sidebar toggle
  $('#sidebarToggle').on('click', function () {
    $('#sidebar').toggleClass('collapsed');
  });

  // Nav group accordion
  $('.nav-group-toggle').on('click', function () {
    const $items = $(this).siblings('.nav-group-items');
    const $icon  = $(this).find('.fa-chevron-down');
    $items.toggleClass('hidden');
    $icon.toggleClass('rotate-180');
  });

  // Mark active nav link based on current URL
  const path = window.location.pathname;
  $('.nav-link').each(function () {
    if ($(this).attr('href') && path.includes($(this).attr('href').replace('../', ''))) {
      $(this).addClass('active');
    }
  });

});
