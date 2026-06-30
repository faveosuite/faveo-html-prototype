import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import { resolve } from 'path'
import { readdirSync, statSync, existsSync } from 'fs'

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

const redirect404Plugin = {
  name: 'redirect-404',
  configureServer(server) {
    server.middlewares.use((req, res, next) => {
      const url = (req.url || '').split('?')[0]
      if (url.endsWith('.html')) {
        const filePath = resolve(__dirname, url.replace(/^\//, ''))
        if (!existsSync(filePath)) {
          res.writeHead(302, { Location: '/pages/extras/error-404.html' })
          res.end()
          return
        }
      }
      next()
    })
  },
}

export default defineConfig({
  plugins: [tailwindcss(), redirect404Plugin],
  base: './',
  appType: 'mpa',
  build: {
    rollupOptions: {
      input: collectHtml(resolve(__dirname)),
    },
  },
})
