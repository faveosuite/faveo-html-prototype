import $ from 'jquery'

// ── Filter panel show/hide ───────────────────────────────────────
function showFilterPanel() {
  $('#filter-aside').removeClass('hidden').addClass('flex')
  $('#btn-toggle-filters').attr('aria-expanded', 'true')
}
function hideFilterPanel() {
  $('#filter-aside').removeClass('flex').addClass('hidden')
  $('#btn-toggle-filters').attr('aria-expanded', 'false')
}

if (window.innerWidth >= 1280) showFilterPanel()

$('#btn-toggle-filters').on('click', function () {
  if ($('#filter-aside').hasClass('hidden')) showFilterPanel()
  else hideFilterPanel()
})
$('#btn-close-filters').on('click', hideFilterPanel)

// ── Show all / applied filters toggle ───────────────────────────
$('#btn-show-all-filters').on('click', function () {
  const allVisible = !$('#all-filters-view').hasClass('hidden')
  if (allVisible) {
    $('#all-filters-view').addClass('hidden').removeClass('flex')
    $('#applied-filters-view').removeClass('hidden')
    $(this).text('Show all filters')
  } else {
    $('#applied-filters-view').addClass('hidden')
    $('#all-filters-view').removeClass('hidden').addClass('flex')
    $(this).text('Show applied filters')
  }
})

// ── Add-filter dropdown ──────────────────────────────────────────
const filterDefs = {
  agent:        { label: 'Agent',             options: ['Any agent', 'Me', 'Unassigned', 'My group'] },
  group:        { label: 'Group',             options: ['Any group'] },
  status:       { label: 'Status',            options: ['Status', 'Open', 'Pending', 'Resolved', 'Closed', 'Waiting on customer'] },
  sentiment:    { label: 'Sentiment',         options: ['Any', 'Positive', 'Neutral', 'Negative'] },
  priority:     { label: 'Priority',          options: ['Any', 'Low', 'Medium', 'High', 'Urgent'] },
  created:      { label: 'Created',           options: ['Any time', 'Today', 'Yesterday', 'This week', 'Last 7 days', 'This month', 'Last 30 days'] },
  'closed-at':  { label: 'Closed at',         options: ['Any time', 'Today', 'Yesterday', 'This week', 'Last 7 days'] },
  'resolved-at':{ label: 'Resolved at',       options: ['Any time', 'Today', 'Yesterday', 'This week', 'Last 7 days'] },
  'due-by':     { label: 'Resolution due by', options: ['Any time', 'Today', 'This week', 'This month'] },
}

$('#btn-add-filter').on('click', function (e) {
  e.stopPropagation()
  $('#add-filter-dropdown').toggleClass('hidden')
  $('#filter-option-search').val('').trigger('input').focus()
})

$('#filter-option-search').on('input', function () {
  const q = $(this).val().toLowerCase()
  $('#filter-options-list .filter-option').each(function () {
    $(this).text().toLowerCase().includes(q)
      ? $(this).removeClass('hidden')
      : $(this).addClass('hidden')
  })
})

$(document).on('click', '.filter-option', function () {
  const key = $(this).attr('data-filter')
  if ($('#applied-filters-list .filter-row[data-filter="' + key + '"]').length) {
    $('#add-filter-dropdown').addClass('hidden')
    return
  }
  const def = filterDefs[key]
  if (!def) return
  const opts = def.options.map(o => `<option>${o}</option>`).join('')
  const row = `<div class="filter-row flex flex-col gap-1.5" data-filter="${key}">
    <div class="flex items-center justify-between">
      <span class="text-xs font-medium text-[#333]">${def.label}</span>
      <button class="btn-remove-filter text-red-400 hover:text-red-600 transition-colors" aria-label="Remove filter">
        <i class="fa-solid fa-circle-minus text-sm" aria-hidden="true"></i>
      </button>
    </div>
    <select class="filter-select focus:border-sky-400">${opts}</select>
  </div>`
  $('#applied-filters-list').append(row)
  $('#add-filter-dropdown').addClass('hidden')
})

$(document).on('click', '.btn-remove-filter', function () {
  $(this).closest('.filter-row').remove()
})

$(document).on('click', function (e) {
  if (!$(e.target).closest('#btn-add-filter, #add-filter-dropdown').length) {
    $('#add-filter-dropdown').addClass('hidden')
  }
})
