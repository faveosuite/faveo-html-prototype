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
  $('#search-overlay').addClass('hidden')
  const $menu = $($(this).data('target'))
  // Close every other open dropdown and remove their active highlight
  $('[data-toggle="dropdown"]').not(this).each(function () {
    $($(this).data('target')).addClass('hidden')
    $(this).removeClass('dropdown-open')
  })
  $menu.toggleClass('hidden')
  $(this).toggleClass('dropdown-open', !$menu.hasClass('hidden'))
  $(this).attr('aria-expanded', !$menu.hasClass('hidden') ? 'true' : 'false')
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
    $(this).attr('aria-expanded', 'false')
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

// ── Tab filter ────────────────────────────────────────────────────
// Usage: <button data-toggle="tab" data-tab="tickets" data-target="#list-id">
//        <li data-item-type="tickets">...</li>
// Marks clicked button active within its group; shows/hides target list items.
// Tab group = all [data-toggle="tab"] sharing the same data-target value.

$(document).on('click', '[data-toggle="tab"]', function () {
  const tab     = $(this).attr('data-tab')
  const target  = $(this).attr('data-target')
  $(`[data-toggle="tab"][data-target="${target}"]`).removeClass('search-tab-active')
  $(this).addClass('search-tab-active')
  const $items = $(target).find('[data-item-type]')
  if (tab === 'all') {
    $items.removeClass('hidden')
  } else {
    $items.each(function () {
      $(this).attr('data-item-type') === tab
        ? $(this).removeClass('hidden')
        : $(this).addClass('hidden')
    })
  }
})

// Mobile menu — directly toggles sidebar-expanded overlay
$(document).on('click', '#btn-mobile-menu', function () {
  $('#sidebar-expanded').toggleClass('hidden')
})
