/**
 * Config
 * -------------------------------------------------------------------------------------
 * ! IMPORTANT: Make sure you clear the browser local storage In order to see the config changes in the template.
 * ! To clear local storage: (https://www.leadshook.com/help/how-to-clear-local-storage-in-google-chrome-browser/).
 */

'use strict';

// JS global variables
window.config = {
  colors: {
    primary: '#7367f0',
    secondary: '#808390',
    success: '#28c76f',
    info: '#00bad1',
    warning: '#ff9f43',
    danger: '#FF4C51',
    dark: '#4b4b4b',
    black: '#000',
    white: '#fff',
    cardColor: '#fff',
    bodyBg: '#f8f7fa',
    bodyColor: '#6d6b77',
    headingColor: '#444050',
    textMuted: '#acaab1',
    borderColor: '#e6e6e8'
  },
  colors_label: {
    primary: '#7367f029',
    secondary: '#a8aaae29',
    success: '#28c76f29',
    info: '#00cfe829',
    warning: '#ff9f4329',
    danger: '#ea545529',
    dark: '#4b4b4b29'
  },
  colors_dark: {
    cardColor: '#2f3349',
    bodyBg: '#25293c',
    bodyColor: '#b2b1cb',
    headingColor: '#cfcce4',
    textMuted: '#8285a0',
    borderColor: '#565b79'
  },
  enableMenuLocalStorage: true // Enable menu state with local storage support
};

window.assetsPath = document.documentElement.getAttribute('data-assets-path');
window.baseUrl = document.documentElement.getAttribute('data-base-url') + '/';
window.templateName = document.documentElement.getAttribute('data-template');
window.rtlSupport = true; // set true for rtl support (rtl + ltr), false for ltr only.
