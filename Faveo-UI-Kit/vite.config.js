import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import { resolve } from 'path'
import { readdirSync, statSync } from 'fs'

const SKIP = new Set(['node_modules', 'dist', 'public', 'src'])

function collectHtml(dir, root = dir) {
  const entries = {}
  for (const entry of readdirSync(dir)) {
    if (SKIP.has(entry)) continue
    const full = `${dir}/${entry}`
    if (statSync(full).isDirectory()) {
      Object.assign(entries, collectHtml(full, root))
    } else if (entry.endsWith('.html')) {
      const key = full.replace(root + '/', '').replace(/\.html$/, '').replace(/\//g, '-') || 'main'
      entries[key] = resolve(full)
    }
  }
  return entries
}

export default defineConfig({
  plugins: [tailwindcss()],
  base: './',
  build: {
    rollupOptions: {
      input: collectHtml(resolve(__dirname)),
    },
  },
})
