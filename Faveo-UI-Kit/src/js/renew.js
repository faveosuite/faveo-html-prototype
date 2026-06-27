import $ from 'jquery'

// Position renew flyout below the red banner before showing
$('[data-target="#panel-renew"]').on('click', function () {
  const top = document.getElementById('banner-red').getBoundingClientRect().bottom
  $('#panel-renew').css('top', top + 'px')
})

// Closing the red banner also closes the renew panel
$('[data-dismiss="#banner-red"]').on('click', function () {
  $('#panel-renew').addClass('hidden')
})
