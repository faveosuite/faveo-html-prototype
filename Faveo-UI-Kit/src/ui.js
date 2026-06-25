import $ from 'jquery'

// ── Dropdown ──────────────────────────────────────────────────────
// Usage: <button data-toggle="dropdown" data-target="#my-menu">
//        <div id="my-menu" class="... hidden">...</div>
//
// Options (on the menu element):
//   data-persistent  — only closes when the toggle button is clicked again;
//                      clicking outside keeps it open (e.g. contact info panel)

$(document).on('click', '[data-toggle="dropdown"]', function (e) {
  e.stopPropagation()
  const $menu = $($(this).data('target'))
  // Close every other open dropdown and remove their active highlight
  $('[data-toggle="dropdown"]').not(this).each(function () {
    $($(this).data('target')).addClass('hidden')
    $(this).removeClass('dropdown-open')
  })
  $menu.toggleClass('hidden')
  $(this).toggleClass('dropdown-open', !$menu.hasClass('hidden'))
})

// Click outside the toggle button → close
// data-persistent (boolean attr) — only closes via toggle; outside clicks ignored
$(document).on('click', function (e) {
  $('[data-toggle="dropdown"]').each(function () {
    const $menu = $($(this).data('target'))
    if ($menu.hasClass('hidden')) return
    if ($(e.target).closest(this).length) return
    if ($menu.is('[data-persistent]')) return
    $menu.addClass('hidden')
    $(this).removeClass('dropdown-open')
  })
})

// ── Modal ─────────────────────────────────────────────────────────
// Usage: <button data-toggle="modal" data-target="#my-modal">
//        <div id="my-modal" class="modal-overlay fixed inset-0 ... hidden">...</div>

$(document).on('click', '[data-toggle="modal"]', function (e) {
  e.stopPropagation()
  $($(this).data('target')).removeClass('hidden')
})

// Click on the backdrop (the overlay itself, not its children) → close
$(document).on('click', '.modal-overlay', function (e) {
  if ($(e.target).is('.modal-overlay')) {
    $(this).addClass('hidden')
  }
})

// ── Dismiss ───────────────────────────────────────────────────────
// Usage: <button data-dismiss="#banner">   ← hides that element
//        <button data-dismiss="parent">    ← hides the direct parent

$(document).on('click', '[data-dismiss]', function () {
  const target = $(this).data('dismiss')
  const $el = target === 'parent' ? $(this).parent() : $(target)
  $el.addClass('hidden')
})
