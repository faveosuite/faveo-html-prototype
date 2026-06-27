import './style.css'
import './ui.js'

import './js/views.js'
import './js/sidebar.js'
import './js/search.js'
import './js/theme.js'
import './js/color-scheme.js'
import './js/profile.js'
import './js/filters.js'
import './js/renew.js'
import './js/ticket-dropdowns.js'

import $ from 'jquery'
import { renderViews } from './js/views.js'

// Default active nav on load
$('.sidebar-nav[data-nav="tickets"]').addClass('active')
renderViews('tickets')
