import $ from 'jquery'

// ── Dropdown ──────────────────────────────────────────────────────
// Usage: <button data-toggle="dropdown" data-target="#my-menu">
//        <div id="my-menu" class="... hidden">...</div>

$(document).on('click', '[data-toggle="dropdown"]', function (e) {
  e.stopPropagation()
  const $menu = $($(this).data('target'))
  // Close every other open dropdown first
  $('[data-toggle="dropdown"]').not(this).each(function () {
    $($(this).data('target')).addClass('hidden')
  })
  $menu.toggleClass('hidden')
})

// Click anywhere outside → close all dropdowns
$(document).on('click', function () {
  $('[data-toggle="dropdown"]').each(function () {
    $($(this).data('target')).addClass('hidden')
  })
})

// ── Dismiss ───────────────────────────────────────────────────────
// Usage: <button data-dismiss="#banner">   ← hides that element
//        <button data-dismiss="parent">    ← hides the direct parent

$(document).on('click', '[data-dismiss]', function () {
  const target = $(this).data('dismiss')
  const $el = target === 'parent' ? $(this).parent() : $(target)
  $el.addClass('hidden')
})
