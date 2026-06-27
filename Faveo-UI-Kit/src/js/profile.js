import $ from 'jquery'

// Reset to main panel on every open
$('[data-target="#profile-dropdown"]').on('click', function () {
  $('#profile-theme-panel').addClass('hidden').removeClass('flex')
  $('#profile-color-panel').addClass('hidden').removeClass('flex')
  $('#profile-main').removeClass('hidden')
})

// Main ↔ theme panel
$('#btn-profile-theme').on('click', function (e) {
  e.stopPropagation()
  $('#profile-main').addClass('hidden')
  $('#profile-theme-panel').removeClass('hidden').addClass('flex')
})
$('#btn-profile-theme-back').on('click', function (e) {
  e.stopPropagation()
  $('#profile-theme-panel').addClass('hidden').removeClass('flex')
  $('#profile-main').removeClass('hidden')
})

// Main ↔ color scheme panel
$('#btn-profile-color').on('click', function (e) {
  e.stopPropagation()
  $('#profile-main').addClass('hidden')
  $('#profile-color-panel').removeClass('hidden').addClass('flex')
})
$('#btn-profile-color-back').on('click', function (e) {
  e.stopPropagation()
  $('#profile-color-panel').addClass('hidden').removeClass('flex')
  $('#profile-main').removeClass('hidden')
})
