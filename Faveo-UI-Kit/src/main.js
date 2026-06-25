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
          <span class="flex-1 text-sm text-gray-600">${item.label}</span>
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
  $('.sidebar-nav[data-nav]').removeClass('active')
  $(`[data-nav="${navKey}"]`).addClass('active')
  renderViews(navKey)
  $('#views-search').val('')
  $('#views-panel').removeClass('hidden')
  $('#sidebar-expanded').addClass('hidden')
})

// ── View item click → hide views panel ──────────────────────────
$(document).on('click', '.view-item', function () {
  $('#views-panel').addClass('hidden')
})

// ── Filter icon → toggle views panel ────────────────────────────
$('#btn-toggle-views').on('click', function () {
  $('#views-panel').toggleClass('hidden')
})

// ── Sidebar expand/collapse (overlay — content never moves) ──────
$('#btn-toggle-sidebar').on('click', function (e) {
  e.stopPropagation()
  $('#sidebar-expanded').removeClass('hidden')
})
$('#btn-collapse-sidebar').on('click', function () {
  $('#sidebar-expanded').addClass('hidden')
})
$(document).on('click', function (e) {
  if (!$(e.target).closest('#sidebar-expanded, #btn-toggle-sidebar').length) {
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

// ── Default active nav (render views but keep panel hidden) ──────
$('.sidebar-nav[data-nav="tickets"]').addClass('active')
renderViews('tickets')
