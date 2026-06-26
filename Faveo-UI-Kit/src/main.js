import './style.css'
import './ui.js'
import $ from 'jquery'

// ── Views panel data ─────────────────────────────────────────────
const navData = {
  dashboard: {
    sections: [
      { title: 'Shared', items: [] },
      { title: 'Default', items: [
        { label: 'Overview',         icon: 'fa-gauge-high' },
        { label: 'My Widgets',       icon: 'fa-table-cells-large' },
        { label: 'Team Performance', icon: 'fa-chart-line' },
      ]},
    ],
  },
  views: {
    sections: [
      { title: 'Shared', items: [
        { label: 'My open and pending tickets',      icon: 'fa-ticket' },
        { label: 'My overdue tickets',               icon: 'fa-clock' },
        { label: 'Open tickets in my groups',        icon: 'fa-users' },
        { label: 'Urgent and high priority tickets', icon: 'fa-circle-exclamation' },
      ]},
      { title: 'Default', items: [
        { label: 'All Tickets',                 icon: 'fa-list' },
        { label: 'All undelivered messages',    icon: 'fa-envelope-open' },
        { label: 'All unresolved tickets',      icon: 'fa-circle-xmark' },
        { label: 'New and my open tickets',     icon: 'fa-ticket' },
        { label: 'Tickets handled by AI Agent', icon: 'fa-robot' },
        { label: 'Tickets I raised',            icon: 'fa-arrow-up-from-bracket' },
        { label: "Tickets I'm mentioned in",    icon: 'fa-at' },
        { label: "Tickets I'm watching",        icon: 'fa-eye' },
        { label: 'Spam',                        icon: 'fa-ban' },
        { label: 'Trash',                       icon: 'fa-trash' },
      ]},
    ],
  },
  tickets: {
    sections: [
      { title: 'Shared', items: [
        { label: 'My open and pending tickets',      icon: 'fa-ticket' },
        { label: 'My overdue tickets',               icon: 'fa-clock' },
        { label: 'Open tickets in my groups',        icon: 'fa-users' },
        { label: 'Urgent and high priority tickets', icon: 'fa-circle-exclamation' },
      ]},
      { title: 'Default', items: [
        { label: 'All Tickets',                 icon: 'fa-list' },
        { label: 'All undelivered messages',    icon: 'fa-envelope-open' },
        { label: 'All unresolved tickets',      icon: 'fa-circle-xmark' },
        { label: 'New and my open tickets',     icon: 'fa-ticket' },
        { label: 'Tickets handled by AI Agent', icon: 'fa-robot' },
        { label: 'Tickets I raised',            icon: 'fa-arrow-up-from-bracket' },
        { label: "Tickets I'm mentioned in",    icon: 'fa-at' },
        { label: "Tickets I'm watching",        icon: 'fa-eye' },
        { label: 'Spam',                        icon: 'fa-ban' },
        { label: 'Trash',                       icon: 'fa-trash' },
      ]},
    ],
  },
  contacts: {
    sections: [
      { title: 'Shared', items: [] },
      { title: 'Default', items: [
        { label: 'Contacts',  icon: 'fa-user' },
        { label: 'Companies', icon: 'fa-building' },
      ]},
    ],
  },
  kb: {
    sections: [
      { title: 'Default', items: [
        { label: 'Articles',   icon: 'fa-file-lines' },
        { label: 'Categories', icon: 'fa-folder' },
        { label: 'Tags',       icon: 'fa-tag' },
      ]},
    ],
  },
  reports: {
    sections: [
      { title: 'Default', items: [
        { label: 'Overview',         icon: 'fa-chart-pie' },
        { label: 'Ticket Reports',   icon: 'fa-ticket' },
        { label: 'Agent Reports',    icon: 'fa-headset' },
        { label: 'Canned Responses', icon: 'fa-comment-dots' },
      ]},
    ],
  },
  agents: {
    sections: [
      { title: 'Default', items: [
        { label: 'All Agents',  icon: 'fa-headset' },
        { label: 'Roles',       icon: 'fa-shield-halved' },
        { label: 'Teams',       icon: 'fa-people-group' },
        { label: 'Departments', icon: 'fa-sitemap' },
      ]},
    ],
  },
  analytics: {
    sections: [
      { title: 'Default', items: [
        { label: 'Dashboard',      icon: 'fa-chart-line' },
        { label: 'Custom Reports', icon: 'fa-chart-bar' },
        { label: 'Export',         icon: 'fa-file-export' },
      ]},
    ],
  },
  admin: {
    sections: [
      { title: 'Default', items: [
        { label: 'Settings',       icon: 'fa-gear' },
        { label: 'Email Settings', icon: 'fa-envelope' },
        { label: 'Plugins',        icon: 'fa-puzzle-piece' },
        { label: 'Integrations',   icon: 'fa-link' },
      ]},
    ],
  },
}

// ── Render views panel ───────────────────────────────────────────
function renderViews(navKey) {
  const data = navData[navKey]
  if (!data) return

  let html = ''
  data.sections.forEach((section, idx) => {
    if (idx > 0) html += '<div class="h-px bg-gray-200 my-1"></div>'
    html += `<button class="view-section-header">
      <span>${section.title}</span>
      <i class="fa-solid fa-chevron-down text-zinc-500 text-[8px] transition-transform duration-200"></i>
    </button>`
    if (section.items.length > 0) {
      html += '<div class="section-items flex flex-col gap-px hidden">'
      section.items.forEach(item => {
        html += `<a href="#" class="view-item">
          <span class="size-6 flex items-center justify-center flex-shrink-0">
            <i class="fa-solid ${item.icon} text-xs text-gray-600"></i>
          </span>
          <span class="flex-1 text-[13px] text-gray-600">${item.label}</span>
        </a>`
      })
      html += '</div>'
    }
  })

  $('#views-content').html(html)

  // Accordion — class-based toggle, no inline styles
  $('#views-content').off('click.accordion').on('click.accordion', '.view-section-header', function () {
    const $items = $(this).next('.section-items')
    const $icon  = $(this).find('.fa-chevron-down')
    $items.toggleClass('hidden')
    $icon.toggleClass('rotate-180')
  })
}

// ── Second-level submenus ────────────────────────────────────────
// JS positions the panel (dynamic pixel values — no Tailwind alternative)
// and shows/hides it via the `hidden` class.
let _submenuTimer = null
let _$activeSubmenu = null

function showSubmenu($el, navKey) {
  if (window.innerWidth < 768) return
  const $menu = $(`#submenu-${navKey}`)
  if (!$menu.length) return
  clearTimeout(_submenuTimer)
  if (_$activeSubmenu && _$activeSubmenu[0] !== $menu[0]) {
    _$activeSubmenu.addClass('hidden')
  }
  const r = $el[0].getBoundingClientRect()
  const $panel = $('#sidebar-expanded').hasClass('hidden') ? $('#sidebar') : $('#sidebar-expanded')
  const panelRight = $panel[0].getBoundingClientRect().right
  $menu.css({ left: panelRight, top: r.top }).removeClass('hidden')
  _$activeSubmenu = $menu
}

function hideSubmenu() {
  _submenuTimer = setTimeout(() => {
    if (_$activeSubmenu) { _$activeSubmenu.addClass('hidden'); _$activeSubmenu = null }
  }, 150)
}

$(document).on('mouseenter', '[data-nav]', function () {
  showSubmenu($(this), $(this).data('nav'))
}).on('mouseleave', '[data-nav]', function () {
  hideSubmenu()
})

$(document).on('mouseenter', '.nav-submenu-panel', function () {
  clearTimeout(_submenuTimer)
}).on('mouseleave', '.nav-submenu-panel', function () {
  hideSubmenu()
})

$(document).on('click', '.submenu-item', function () {
  if (_$activeSubmenu) { _$activeSubmenu.addClass('hidden'); _$activeSubmenu = null }
})

// ── Nav icon click ────────────────────────────────────────────────
$(document).on('click', '[data-nav]', function () {
  const navKey = $(this).data('nav')
  const $submenu = $(`#submenu-${navKey}`)

  // Mobile: show submenu items inline in the expanded sidebar (accordion)
  if (window.innerWidth < 768 && $submenu.length) {
    const $existing = $(this).next('.mobile-subnav')
    // Collapse any other open mobile subnavs
    $('.mobile-subnav').not($existing).addClass('hidden')
    if ($existing.length) {
      $existing.toggleClass('hidden')
    } else {
      const items = $submenu.find('.submenu-item').map(function () { return $(this).text().trim() }).get()
      const html = '<div class="mobile-subnav flex flex-col pb-1">' +
        items.map(label =>
          '<button class="mobile-subnav-item text-left text-[12px] text-[#4a5565] py-2 pl-14 pr-3 rounded-[8px] hover:bg-[#e8e8e8] bg-transparent border-none w-full cursor-pointer font-medium">' + label + '</button>'
        ).join('') +
        '</div>'
      $(this).after(html)
    }
    return // Keep sidebar open so user can pick a sub-item
  }

  // Desktop or nav items without submenus
  $('.sidebar-nav[data-nav]').removeClass('active')
  $(`[data-nav="${navKey}"]`).addClass('active')
  renderViews(navKey)
  $('#views-search').val('')
  $('#sidebar-expanded').addClass('hidden')
})

// Mobile subnav item click → close sidebar
$(document).on('click', '.mobile-subnav-item', function () {
  $('#sidebar-expanded').addClass('hidden')
})

// ── View item click → highlight selected ────────────────────────
$(document).on('click', '.view-item', function () {
  $('#views-content .view-item').removeClass('active')
  $(this).addClass('active')
})

// ── Filter icon → toggle views panel ────────────────────────────
$('#btn-toggle-views').on('click', function () {
  $('#views-panel').toggleClass('hidden')
})

// ── Sidebar expand/collapse (overlay — content never moves) ──────
// Sidebar logo fallback — show text if image fails to load
$('#sidebar-logo').on('error', function () {
  $(this).addClass('hidden')
  $('#sidebar-logo-fallback').removeClass('hidden')
})

$('#btn-toggle-sidebar').on('click', function (e) {
  e.stopPropagation()
  $('#sidebar-expanded').removeClass('hidden')
})
$('#btn-collapse-sidebar').on('click', function () {
  $('#sidebar-expanded').addClass('hidden')
})
$(document).on('click', function (e) {
  if (!$(e.target).closest('#sidebar-expanded, #btn-toggle-sidebar, #btn-mobile-menu').length) {
    $('#sidebar-expanded').addClass('hidden')
  }
})

// ── Views search ─────────────────────────────────────────────────
$(document).on('input', '#views-search', function () {
  const q = $(this).val().toLowerCase().trim()
  $('#views-content .view-item').each(function () {
    if (!q || $(this).text().toLowerCase().includes(q)) {
      $(this).removeClass('hidden')
    } else {
      $(this).addClass('hidden')
    }
  })
})

// ── Banner dismiss handled by ui.js [data-dismiss] ───────────────

// ── Renew flyout: position below #banner-red before showing ──────
$('[data-target="#panel-renew"]').on('click', function () {
  const top = document.getElementById('banner-red').getBoundingClientRect().bottom
  $('#panel-renew').css('top', top + 'px')
  // ui.js data-toggle="modal" handler removes hidden after this fires
})

// Closing the red banner also closes the renew panel
$('[data-dismiss="#banner-red"]').on('click', function () {
  $('#panel-renew').addClass('hidden')
})

// ── Filters panel toggle ─────────────────────────────────────────
function showFilterPanel () {
  $('#filter-aside').removeClass('hidden').addClass('flex')
  $('#btn-toggle-filters').attr('aria-expanded', 'true')
}
function hideFilterPanel () {
  $('#filter-aside').removeClass('flex').addClass('hidden')
  $('#btn-toggle-filters').attr('aria-expanded', 'false')
}
// Auto-show at xl+ (≥1280px) on load
if (window.innerWidth >= 1280) showFilterPanel()

$('#btn-toggle-filters').on('click', function () {
  if ($('#filter-aside').hasClass('hidden')) showFilterPanel()
  else hideFilterPanel()
})
$('#btn-close-filters').on('click', hideFilterPanel)

// ── Search overlay ───────────────────────────────────────────────

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

// ── Profile menu: reset to main panel on every open ─────────────
$('[data-target="#profile-dropdown"]').on('click', function () {
  $('#profile-theme-panel').addClass('hidden').removeClass('flex')
  $('#profile-color-panel').addClass('hidden').removeClass('flex')
  $('#profile-main').removeClass('hidden')
})

// ── Profile menu: main ↔ theme panel ────────────────────────────
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

// ── Theme switcher ───────────────────────────────────────────────
function applyTheme (pref) {
  const html = document.documentElement
  if (pref === 'dark') {
    html.setAttribute('data-theme', 'dark')
  } else if (pref === 'light') {
    html.setAttribute('data-theme', 'light')
  } else {
    // auto — follow system
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches
    html.setAttribute('data-theme', prefersDark ? 'dark' : 'light')
  }
}

// Sync radio to saved preference on load
const savedTheme = localStorage.getItem('faveo-theme') || 'auto'
$(`input[name="theme"][value="${savedTheme}"]`).prop('checked', true)
applyTheme(savedTheme)

// Change handler
$(document).on('change', 'input[name="theme"]', function () {
  const pref = $(this).val()
  localStorage.setItem('faveo-theme', pref)
  applyTheme(pref)
})

// Re-apply on system theme change (for auto mode)
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function () {
  if ((localStorage.getItem('faveo-theme') || 'auto') === 'auto') applyTheme('auto')
})

// ── Profile menu: color scheme panel ────────────────────────────
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

// ── Color pickers: sidebar + topnav are independent ───────────────
function applySidebarColor (color) {
  if (color && color !== 'default') {
    document.documentElement.setAttribute('data-sidebar-color', color)
  } else {
    document.documentElement.removeAttribute('data-sidebar-color')
  }
  $(`.color-swatch[data-target="sidebar"]`).removeClass('swatch-active')
  $(`.color-swatch[data-target="sidebar"][data-color="${color || 'default'}"]`).addClass('swatch-active')
}

function applyTopnavColor (color) {
  if (color && color !== 'default') {
    document.documentElement.setAttribute('data-topnav-color', color)
  } else {
    document.documentElement.removeAttribute('data-topnav-color')
  }
  $(`.color-swatch[data-target="topnav"]`).removeClass('swatch-active')
  $(`.color-swatch[data-target="topnav"][data-color="${color || 'default'}"]`).addClass('swatch-active')
}

applySidebarColor(localStorage.getItem('faveo-sidebar-color') || 'default')
applyTopnavColor(localStorage.getItem('faveo-topnav-color') || 'default')

$(document).on('click', '.color-swatch', function () {
  const color  = $(this).attr('data-color')
  const target = $(this).attr('data-target')
  if (target === 'sidebar') {
    localStorage.setItem('faveo-sidebar-color', color)
    applySidebarColor(color)
  } else if (target === 'topnav') {
    localStorage.setItem('faveo-topnav-color', color)
    applyTopnavColor(color)
  }
})

// Reset color panel on dropdown open (same as theme panel)
$('[data-target="#profile-dropdown"]').on('click', function () {
  $('#profile-color-panel').addClass('hidden').removeClass('flex')
})

// ── Filter panel: Show all filters / Show applied filters toggle ─
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

// ── Filter panel: Add filters dropdown ──────────────────────────
const filterDefs = {
  agent:       { label: 'Agent',              options: ['Any agent', 'Me', 'Unassigned', 'My group'] },
  group:       { label: 'Group',              options: ['Any group'] },
  status:      { label: 'Status',             options: ['Status', 'Open', 'Pending', 'Resolved', 'Closed', 'Waiting on customer'] },
  sentiment:   { label: 'Sentiment',          options: ['Any', 'Positive', 'Neutral', 'Negative'] },
  priority:    { label: 'Priority',           options: ['Any', 'Low', 'Medium', 'High', 'Urgent'] },
  created:     { label: 'Created',            options: ['Any time', 'Today', 'Yesterday', 'This week', 'Last 7 days', 'This month', 'Last 30 days'] },
  'closed-at': { label: 'Closed at',          options: ['Any time', 'Today', 'Yesterday', 'This week', 'Last 7 days'] },
  'resolved-at':{ label: 'Resolved at',       options: ['Any time', 'Today', 'Yesterday', 'This week', 'Last 7 days'] },
  'due-by':    { label: 'Resolution due by',  options: ['Any time', 'Today', 'This week', 'This month'] },
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

// ── Default active nav (render views but keep panel hidden) ──────
$('.sidebar-nav[data-nav="tickets"]').addClass('active')
renderViews('tickets')
