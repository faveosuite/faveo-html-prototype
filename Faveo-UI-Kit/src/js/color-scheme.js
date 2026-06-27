import $ from 'jquery'

export function applySidebarColor(color) {
  if (color && color !== 'default') {
    document.documentElement.setAttribute('data-sidebar-color', color)
  } else {
    document.documentElement.removeAttribute('data-sidebar-color')
  }
  $(`.color-swatch[data-target="sidebar"]`).removeClass('swatch-active')
  $(`.color-swatch[data-target="sidebar"][data-color="${color || 'default'}"]`).addClass('swatch-active')
}

export function applyTopnavColor(color) {
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
