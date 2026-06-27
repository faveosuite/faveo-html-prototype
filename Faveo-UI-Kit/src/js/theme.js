import $ from 'jquery'

export function applyTheme(pref) {
  const html = document.documentElement
  if (pref === 'dark') {
    html.setAttribute('data-theme', 'dark')
  } else if (pref === 'light') {
    html.setAttribute('data-theme', 'light')
  } else {
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches
    html.setAttribute('data-theme', prefersDark ? 'dark' : 'light')
  }
}

const savedTheme = localStorage.getItem('faveo-theme') || 'auto'
$(`input[name="theme"][value="${savedTheme}"]`).prop('checked', true)
applyTheme(savedTheme)

$(document).on('change', 'input[name="theme"]', function () {
  const pref = $(this).val()
  localStorage.setItem('faveo-theme', pref)
  applyTheme(pref)
})

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function () {
  if ((localStorage.getItem('faveo-theme') || 'auto') === 'auto') applyTheme('auto')
})
