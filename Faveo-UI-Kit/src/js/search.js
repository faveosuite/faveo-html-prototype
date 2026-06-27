import $ from 'jquery'

$('#search-trigger').on('click', function (e) {
  e.stopPropagation()
  $('#search-main-content').removeClass('hidden')
  $('#search-prefs-content').addClass('hidden')
  $('#search-overlay').removeClass('hidden')
  $('#search-overlay-input').focus()
})

$('#btn-search-prefs').on('click', function (e) {
  e.stopPropagation()
  $('#search-main-content').addClass('hidden')
  $('#search-prefs-content').removeClass('hidden').addClass('flex')
})

$('#btn-search-prefs-cancel').on('click', function (e) {
  e.stopPropagation()
  $('#search-prefs-content').addClass('hidden').removeClass('flex')
  $('#search-main-content').removeClass('hidden')
  $('#search-overlay-input').focus()
})

$(document).on('click', function (e) {
  if (!$(e.target).closest('#search-overlay, #search-trigger').length) {
    $('#search-overlay').addClass('hidden')
  }
})
