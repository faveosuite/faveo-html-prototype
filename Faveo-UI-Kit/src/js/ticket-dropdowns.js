import $ from 'jquery'

let $activeBtn = null

const CHECK_ICON = '<i class="opt-check fa-solid fa-check text-[#525252] text-[10px]" aria-hidden="true"></i>'

function markActive($opts, matchValue) {
  $opts.each(function () {
    const sel = $(this).data('value') === matchValue
    $(this).toggleClass('bg-[#cfcfcf]', sel).toggleClass('hover:bg-[#f1f5f9]', !sel)
    $(this).find('.opt-check').remove()
    if (sel) $(this).append(CHECK_ICON)
  })
}

function place($panel, $btn) {
  $panel.removeClass('hidden')
  const rect = $btn[0].getBoundingClientRect()
  const pw   = $panel.outerWidth()
  let left   = rect.left
  if (left + pw > window.innerWidth - 8) left = window.innerWidth - pw - 8
  $panel.css({ top: rect.bottom + 4, left: Math.max(8, left) })
}

function closeAll() {
  $('#panel-priority, #panel-status, #panel-agent').addClass('hidden')
  $activeBtn = null
}

$(document).on('click', function (e) {
  if (!$(e.target).closest('#panel-priority,#panel-status,#panel-agent,.priority-btn,.agent-btn,.status-btn').length) {
    closeAll()
  }
})

$(function () {

  // ── Priority ──────────────────────────────────────────────────────
  $(document).on('click', '.priority-btn', function () {
    const $btn = $(this)
    if ($activeBtn && $activeBtn.is($btn) && !$('#panel-priority').hasClass('hidden')) {
      closeAll(); return
    }
    closeAll()
    const cur = $btn.find('.priority-label').text().trim()
    markActive($('#panel-priority .priority-opt'), cur)
    place($('#panel-priority'), $btn)
    $activeBtn = $btn
  })

  $(document).on('click', '#panel-priority .priority-opt', function () {
    if (!$activeBtn) return
    const color = $(this).data('color')
    $activeBtn.find('.priority-dot').attr('class', `priority-dot w-2.5 h-2.5 rounded-full ${color} inline-block shrink-0`)
    $activeBtn.find('.priority-label').text($(this).data('value'))
    closeAll()
  })

  // ── Status ────────────────────────────────────────────────────────
  $(document).on('click', '.status-btn', function () {
    const $btn = $(this)
    if ($activeBtn && $activeBtn.is($btn) && !$('#panel-status').hasClass('hidden')) {
      closeAll(); return
    }
    closeAll()
    const cur = $btn.find('.status-label').text().trim()
    markActive($('#panel-status .status-opt'), cur)
    place($('#panel-status'), $btn)
    $activeBtn = $btn
  })

  $(document).on('click', '#panel-status .status-opt', function () {
    if (!$activeBtn) return
    $activeBtn.find('.status-icon').attr('class', `status-icon fa-solid ${$(this).data('icon')} text-[9px]`)
    $activeBtn.find('.status-label').text($(this).data('value'))
    closeAll()
  })

  // ── Agent ──────────────────────────────────────────────────────────
  $(document).on('click', '.agent-btn', function () {
    const $btn = $(this)
    if ($activeBtn && $activeBtn.is($btn) && !$('#panel-agent').hasClass('hidden')) {
      closeAll(); return
    }
    closeAll()
    const cur = $btn.find('.agent-label').text().trim()
    markActive($('#panel-agent .agent-opt'), cur)
    place($('#panel-agent'), $btn)
    $activeBtn = $btn
  })

  $(document).on('click', '#panel-agent .agent-opt', function () {
    if (!$activeBtn) return
    $activeBtn.find('.agent-label').text($(this).data('value'))
    closeAll()
  })

  $(document).on('input', '#agent-search-input', function () {
    const q = $(this).val().toLowerCase()
    $('#panel-agent .agent-opt').each(function () {
      $(this).toggleClass('hidden', q.length > 0 && !$(this).find('span:last').text().toLowerCase().includes(q))
    })
  })

})
