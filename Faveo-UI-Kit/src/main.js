import './style.css'
import './ui.js'

import './js/views.js'
import './js/sidebar.js'
import './js/search.js'
import './js/theme.js'
import './js/color-scheme.js'
import './js/profile.js'
import './js/renew.js'
import $ from 'jquery'
import { renderViews } from './js/views.js'

// Default active nav on load (tickets inbox only)
if ($('ul[aria-label="Ticket list"]').length) {
  $('.sidebar-nav[data-nav="tickets"]').addClass('active')
  renderViews('tickets')
}
